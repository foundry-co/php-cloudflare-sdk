<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(): \FoundryCo\Cloudflare\Responses\ZoneLevelAccessShortLivedCertificateCAsAs
	{
		return $this->client->get('/zones/' . $this->zoneId . '/access/apps/ca', \FoundryCo\Cloudflare\Responses\ZoneLevelAccessShortLivedCertificateCAsAs::class, []);
	}


	/**
	 * Get a short-lived certificate CA
	 */
	public function get(string $appId): \FoundryCo\Cloudflare\Responses\ZoneLevelAccessShortLivedCertificateCAsCa
	{
		return $this->client->get('/zones/' . $this->zoneId . '/access/apps/' . $appId . '/ca', \FoundryCo\Cloudflare\Responses\ZoneLevelAccessShortLivedCertificateCAsCa::class, []);
	}


	/**
	 * Create a short-lived certificate CA
	 */
	public function create(string $appId): \FoundryCo\Cloudflare\Responses\ZoneLevelAccessShortLivedCertificateCAsCa
	{
		return $this->client->post('/zones/' . $this->zoneId . '/access/apps/' . $appId . '/ca', \FoundryCo\Cloudflare\Responses\ZoneLevelAccessShortLivedCertificateCAsCa::class, null);
	}


	/**
	 * Delete a short-lived certificate CA
	 */
	public function delete(string $appId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/access/apps/' . $appId . '/ca');
	}
}
