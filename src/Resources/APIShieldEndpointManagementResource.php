<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class APIShieldEndpointManagementResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Retrieve information about all operations on a zone
	 */
	public function list(
		?int $page = null,
		?int $perPage = null,
		?\FoundryCo\Cloudflare\Enums\APIShieldEndpointManagementOrder $order = null,
		?\FoundryCo\Cloudflare\Enums\APIShieldEndpointManagementDirection $direction = null,
		?array $host = null,
		?array $method = null,
		?string $endpoint = null,
		?array $feature = null,
	): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/api_gateway/operations', null, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null, 'host' => $host ?? null, 'method' => $method ?? null, 'endpoint' => $endpoint ?? null, 'feature' => $feature ?? null]);
	}


	/**
	 * Add operations to a zone
	 */
	public function create(): \FoundryCo\Cloudflare\Responses\APIShieldEndpointManagementZone
	{
		return $this->client->post('/zones/' . $this->zoneId . '/api_gateway/operations', \FoundryCo\Cloudflare\Responses\APIShieldEndpointManagementZone::class, null);
	}


	/**
	 * Delete multiple operations
	 */
	public function delete(): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/api_gateway/operations');
	}


	/**
	 * Add one operation to a zone
	 */
	public function item(
		\FoundryCo\Cloudflare\Requests\ApiShieldEndpointManagementAddOperationToAZoneRequest $request,
	): \FoundryCo\Cloudflare\Responses\APIShieldEndpointManagementZone
	{
		return $this->client->post('/zones/' . $this->zoneId . '/api_gateway/operations/item', \FoundryCo\Cloudflare\Responses\APIShieldEndpointManagementZone::class, $request);
	}


	/**
	 * Retrieve information about an operation
	 */
	public function get(
		?array $feature = null,
		?bool $withSchemas = null,
	): \FoundryCo\Cloudflare\Responses\APIShieldEndpointManagementOperation
	{
		return $this->client->get('/zones/' . $this->zoneId . '/api_gateway/operations/' . $operationId, \FoundryCo\Cloudflare\Responses\APIShieldEndpointManagementOperation::class, ['feature' => $feature ?? null, 'withSchemas' => $withSchemas ?? null]);
	}


	/**
	 * Delete an operation
	 */
	public function operations(): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/api_gateway/operations/' . $operationId);
	}


	/**
	 * Retrieve operations and features as OpenAPI schemas
	 */
	public function schemas(
		?array $host = null,
		?array $feature = null,
	): \FoundryCo\Cloudflare\Responses\APIShieldEndpointManagementSchemas
	{
		return $this->client->get('/zones/' . $this->zoneId . '/api_gateway/schemas', \FoundryCo\Cloudflare\Responses\APIShieldEndpointManagementSchemas::class, ['host' => $host ?? null, 'feature' => $feature ?? null]);
	}
}
