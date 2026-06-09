<?php

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Http;

use CuyZ\Valinor\Mapper\Source\Source;
use CuyZ\Valinor\MapperBuilder;
use FoundryCo\Cloudflare\Exceptions\CloudflareException;
use FoundryCo\Cloudflare\Support\PaginatedResponse;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;

class HttpClient
{
    private readonly Client $guzzle;
    private readonly \CuyZ\Valinor\Mapper\TreeMapper $mapper;

    public function __construct(
        private readonly string $apiToken,
        string $baseUrl = 'https://api.cloudflare.com/client/v4',
    ) {
        $this->guzzle = new Client([
            'base_uri' => rtrim($baseUrl, '/'),
            'headers'  => [
                'Authorization' => "Bearer {$apiToken}",
                'Content-Type'  => 'application/json',
                'Accept'        => 'application/json',
            ],
        ]);

        $this->mapper = (new MapperBuilder())
            ->allowPermissiveTypes()
            ->enableFlexibleCasting()
            ->allowSuperfluousKeys()
            ->mapper();
    }

    /**
     * @template T of object
     * @param class-string<T> $responseClass
     * @return T|PaginatedResponse<T>
     */
    public function get(string $path, string $responseClass, array $query = []): mixed
    {
        $body = $this->request('GET', $path, query: $query);
        return $this->deserialize($body, $responseClass);
    }

    /**
     * @template T of object
     * @param class-string<T>|null $responseClass
     * @return T|null
     */
    public function post(string $path, ?string $responseClass, ?object $payload = null): mixed
    {
        $body = $this->request('POST', $path, json: $payload?->toArray() ?? []);
        return $responseClass ? $this->deserializeSingle($body, $responseClass) : null;
    }

    /**
     * @template T of object
     * @param class-string<T>|null $responseClass
     * @return T|null
     */
    public function put(string $path, ?string $responseClass, ?object $payload = null): mixed
    {
        $body = $this->request('PUT', $path, json: $payload?->toArray() ?? []);
        return $responseClass ? $this->deserializeSingle($body, $responseClass) : null;
    }

    /**
     * @template T of object
     * @param class-string<T>|null $responseClass
     * @return T|null
     */
    public function patch(string $path, ?string $responseClass, ?object $payload = null): mixed
    {
        $body = $this->request('PATCH', $path, json: $payload?->toArray() ?? []);
        return $responseClass ? $this->deserializeSingle($body, $responseClass) : null;
    }

    public function delete(string $path): void
    {
        $this->request('DELETE', $path);
    }

    private function request(string $method, string $path, array $query = [], array $json = []): array
    {
        try {
            $options = [];
            if (!empty($query)) {
                $options['query'] = array_filter($query, fn ($v) => $v !== null);
            }
            if (!empty($json)) {
                $options['json'] = $json;
            }

            $response = $this->guzzle->request($method, ltrim($path, '/'), $options);
            $body = json_decode((string) $response->getBody(), true);

            if (!($body['success'] ?? false)) {
                throw CloudflareException::fromResponse($response->getStatusCode(), $body);
            }

            return $body;
        } catch (BadResponseException $e) {
            $status = $e->getResponse()->getStatusCode();
            $body = json_decode((string) $e->getResponse()->getBody(), true) ?? [];
            throw CloudflareException::fromResponse($status, $body);
        }
    }

    /**
     * @template T of object
     * @param class-string<T> $class
     * @return T|PaginatedResponse<T>
     */
    private function deserialize(array $body, string $class): mixed
    {
        if (isset($body['result_info'])) {
            return $this->deserializePaginated($body, $class);
        }

        return $this->deserializeSingle($body, $class);
    }

    /**
     * @template T of object
     * @param class-string<T> $class
     * @return PaginatedResponse<T>
     */
    private function deserializePaginated(array $body, string $class): PaginatedResponse
    {
        $items = array_map(
            fn (array $item) => $this->mapper->map($class, Source::array($item)),
            $body['result'] ?? []
        );

        $info = $body['result_info'];

        return new PaginatedResponse(
            items: $items,
            total: (int) ($info['total_count'] ?? count($items)),
            page: (int) ($info['page'] ?? 1),
            perPage: (int) ($info['per_page'] ?? count($items)),
            totalPages: (int) ($info['total_pages'] ?? 1),
        );
    }

    /**
     * @template T of object
     * @param class-string<T> $class
     * @return T
     */
    private function deserializeSingle(array $body, string $class): object
    {
        $result = $body['result'] ?? $body;
        return $this->mapper->map($class, Source::array(is_array($result) ? $result : []));
    }
}
