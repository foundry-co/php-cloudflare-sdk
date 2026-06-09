<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class CustomCsrsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List Custom CSRs
	 */
	public function list(
		?float $page = null,
		?float $perPage = null,
	): \FoundryCo\Cloudflare\Responses\CustomCSRsForAZoneCsrs
	{
		return $this->client->get('/zones/' . $this->zoneId . '/custom_csrs', \FoundryCo\Cloudflare\Responses\CustomCSRsForAZoneCsrs::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create Custom CSR
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\CustomCsrsForAZoneCreateCustomCsrRequest $request,
	): \FoundryCo\Cloudflare\Responses\CustomCSRsForAZoneCsr
	{
		return $this->client->post('/zones/' . $this->zoneId . '/custom_csrs', \FoundryCo\Cloudflare\Responses\CustomCSRsForAZoneCsr::class, $request);
	}


	/**
	 * Custom CSR Details
	 */
	public function get(string $customCsrId): \FoundryCo\Cloudflare\Responses\CustomCSRsForAZoneDetails
	{
		return $this->client->get('/zones/' . $this->zoneId . '/custom_csrs/' . $customCsrId, \FoundryCo\Cloudflare\Responses\CustomCSRsForAZoneDetails::class, []);
	}


	/**
	 * Delete Custom CSR
	 */
	public function delete(string $customCsrId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/custom_csrs/' . $customCsrId);
	}
}
