<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AccessServiceTokensResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List service tokens
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/access/service_tokens', \FoundryCo\Cloudflare\Responses\ZoneLevelAccessServiceTokensListServiceTokens::class, []);
	}


	/**
	 * Create a service token
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\ZoneLevelAccessServiceTokensCreateAServiceTokenRequest $request,
	): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/access/service_tokens', \FoundryCo\Cloudflare\Responses\ZoneLevelAccessServiceTokensCreateAServiceToken::class, $request);
	}


	/**
	 * Get a service token
	 */
	public function get(string $serviceTokenId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/access/service_tokens/' . $serviceTokenId, \FoundryCo\Cloudflare\Responses\ZoneLevelAccessServiceTokensGetAServiceToken::class, []);
	}


	/**
	 * Update a service token
	 */
	public function update(
		string $serviceTokenId,
		\FoundryCo\Cloudflare\Requests\ZoneLevelAccessServiceTokensUpdateAServiceTokenRequest $request,
	): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/access/service_tokens/' . $serviceTokenId, \FoundryCo\Cloudflare\Responses\ZoneLevelAccessServiceTokensUpdateAServiceToken::class, $request);
	}


	/**
	 * Delete a service token
	 */
	public function delete(string $serviceTokenId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/access/service_tokens/' . $serviceTokenId);
	}
}
