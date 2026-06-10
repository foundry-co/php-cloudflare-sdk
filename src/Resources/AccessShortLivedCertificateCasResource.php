<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AccessShortLivedCertificateCasResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List short-lived certificate CAs
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/access/apps/ca', \FoundryCo\Cloudflare\Responses\ZoneLevelAccessShortLivedCertificateCAsListShortLivedCertificateCAs::class, []);
	}


	/**
	 * Get a short-lived certificate CA
	 */
	public function get(string $appId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/access/apps/' . $appId . '/ca', \FoundryCo\Cloudflare\Responses\ZoneLevelAccessShortLivedCertificateCAsGetAShortLivedCertificateCa::class, []);
	}


	/**
	 * Create a short-lived certificate CA
	 */
	public function create(string $appId): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/access/apps/' . $appId . '/ca', \FoundryCo\Cloudflare\Responses\ZoneLevelAccessShortLivedCertificateCAsCreateAShortLivedCertificateCa::class, null);
	}


	/**
	 * Delete a short-lived certificate CA
	 */
	public function delete(string $appId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/access/apps/' . $appId . '/ca');
	}
}
