<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class APIShieldAPIDiscoveryResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Retrieve discovered operations on a zone rendered as OpenAPI schemas
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\APIShieldAPIDiscoveryOpenapi
	{
		return $this->client->get('/zones/' . $this->zoneId . '/api_gateway/discovery', \FoundryCo\Cloudflare\Responses\APIShieldAPIDiscoveryOpenapi::class, []);
	}


	/**
	 * Retrieve discovered operations on a zone
	 */
	public function operations(
		?int $page = null,
		?int $perPage = null,
		?array $host = null,
		?array $method = null,
		?string $endpoint = null,
		?\FoundryCo\Cloudflare\Enums\APIShieldAPIDiscoveryDirection $direction = null,
		?\FoundryCo\Cloudflare\Enums\APIShieldAPIDiscoveryOrder $order = null,
		?bool $diff = null,
		?\FoundryCo\Cloudflare\Enums\APIShieldAPIDiscoveryOrigin $origin = null,
		?\FoundryCo\Cloudflare\Enums\APIShieldAPIDiscoveryState $state = null,
	): \FoundryCo\Cloudflare\Responses\APIShieldAPIDiscoveryZone
	{
		return $this->client->get('/zones/' . $this->zoneId . '/api_gateway/discovery/operations', \FoundryCo\Cloudflare\Responses\APIShieldAPIDiscoveryZone::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'host' => $host ?? null, 'method' => $method ?? null, 'endpoint' => $endpoint ?? null, 'direction' => $direction ?? null, 'order' => $order ?? null, 'diff' => $diff ?? null, 'origin' => $origin ?? null, 'state' => $state ?? null]);
	}


	/**
	 * Patch discovered operations
	 */
	public function update(): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/api_gateway/discovery/operations', null, null);
	}


	/**
	 * Retrieve a discovered operation
	 */
	public function get(): \FoundryCo\Cloudflare\Responses\APIShieldAPIDiscoveryId
	{
		return $this->client->get('/zones/' . $this->zoneId . '/api_gateway/discovery/operations/' . $discoveryId, \FoundryCo\Cloudflare\Responses\APIShieldAPIDiscoveryId::class, []);
	}


	/**
	 * Patch discovered operation
	 */
	public function apiShieldApiPatchDiscoveredOperation(
		\FoundryCo\Cloudflare\Requests\ApiShieldApiPatchDiscoveredOperationRequest $request,
	): \FoundryCo\Cloudflare\Responses\APIShieldAPIDiscoveryOperation
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/api_gateway/discovery/operations/' . $discoveryId, \FoundryCo\Cloudflare\Responses\APIShieldAPIDiscoveryOperation::class, $request);
	}
}
