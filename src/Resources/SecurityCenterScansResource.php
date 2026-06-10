<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class SecurityCenterScansResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Get Recent Account Scans
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/security-center/insights/scans', \FoundryCo\Cloudflare\Responses\GetSecurityCenterAccountScans::class, []);
	}


	/**
	 * Start On-Demand Account Scan
	 */
	public function create(): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/security-center/insights/scans', \FoundryCo\Cloudflare\Responses\StartSecurityCenterAccountScan::class, null);
	}


	/**
	 * Get Recent Zone Scans
	 */
	public function scans(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/security-center/insights/scans', \FoundryCo\Cloudflare\Responses\GetSecurityCenterZoneScans::class, []);
	}


	/**
	 * Start On-Demand Zone Scan
	 */
	public function startSecurityCenterZoneScan(): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/security-center/insights/scans', \FoundryCo\Cloudflare\Responses\StartSecurityCenterZoneScan::class, null);
	}
}
