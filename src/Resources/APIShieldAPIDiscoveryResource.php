<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/api_gateway/discovery', \FoundryCo\Cloudflare\Responses\ApiShieldApiDiscoveryRetrieveDiscoveredOperationsOnAZoneAsOpenapi::class, []);
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
	): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/api_gateway/discovery/operations', \FoundryCo\Cloudflare\Responses\ApiShieldApiDiscoveryRetrieveDiscoveredOperationsOnAZone::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'host' => $host ?? null, 'method' => $method ?? null, 'endpoint' => $endpoint ?? null, 'direction' => $direction ?? null, 'order' => $order ?? null, 'diff' => $diff ?? null, 'origin' => $origin ?? null, 'state' => $state ?? null]);
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
	public function get(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/api_gateway/discovery/operations/' . $discoveryId, \FoundryCo\Cloudflare\Responses\ApiShieldApiDiscoveryRetrieveDiscoveredOperationById::class, []);
	}


	/**
	 * Patch discovered operation
	 */
	public function apiShieldApiPatchDiscoveredOperation(
		\FoundryCo\Cloudflare\Requests\ApiShieldApiPatchDiscoveredOperationRequest $request,
	): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/api_gateway/discovery/operations/' . $discoveryId, \FoundryCo\Cloudflare\Responses\ApiShieldApiPatchDiscoveredOperation::class, $request);
	}
}
