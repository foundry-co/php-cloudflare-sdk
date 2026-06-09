<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class CustomOriginTrustStoreResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List Custom Origin Trust Store Details
	 */
	public function list(
		?float $page = null,
		?float $perPage = null,
		?int $limit = null,
		?int $offset = null,
	): \FoundryCo\Cloudflare\Responses\CustomOriginTrustStoreDetails
	{
		return $this->client->get('/zones/' . $this->zoneId . '/acm/custom_trust_store', \FoundryCo\Cloudflare\Responses\CustomOriginTrustStoreDetails::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'limit' => $limit ?? null, 'offset' => $offset ?? null]);
	}


	/**
	 * Upload Custom Origin Trust Store
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\CustomOriginTrustStoreCreateRequest $request,
	): \FoundryCo\Cloudflare\Responses\CustomOriginTrustStoreCreate
	{
		return $this->client->post('/zones/' . $this->zoneId . '/acm/custom_trust_store', \FoundryCo\Cloudflare\Responses\CustomOriginTrustStoreCreate::class, $request);
	}


	/**
	 * Custom Origin Trust Store Details
	 */
	public function get(string $customOriginTrustStoreId): \FoundryCo\Cloudflare\Responses\CustomOriginTrustStoreDetails
	{
		return $this->client->get('/zones/' . $this->zoneId . '/acm/custom_trust_store/' . $customOriginTrustStoreId, \FoundryCo\Cloudflare\Responses\CustomOriginTrustStoreDetails::class, []);
	}


	/**
	 * Delete Custom Origin Trust Store
	 */
	public function delete(string $customOriginTrustStoreId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/acm/custom_trust_store/' . $customOriginTrustStoreId);
	}
}
