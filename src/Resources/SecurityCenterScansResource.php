<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(): \FoundryCo\Cloudflare\Responses\SecurityCenterScansScans
	{
		return $this->client->get('/accounts/' . $this->accountId . '/security-center/insights/scans', \FoundryCo\Cloudflare\Responses\SecurityCenterScansScans::class, []);
	}


	/**
	 * Start On-Demand Account Scan
	 */
	public function create(): \FoundryCo\Cloudflare\Responses\SecurityCenterScansScan
	{
		return $this->client->post('/accounts/' . $this->accountId . '/security-center/insights/scans', \FoundryCo\Cloudflare\Responses\SecurityCenterScansScan::class, null);
	}


	/**
	 * Get Recent Zone Scans
	 */
	public function scans(): \FoundryCo\Cloudflare\Responses\SecurityCenterScansScans
	{
		return $this->client->get('/zones/' . $this->zoneId . '/security-center/insights/scans', \FoundryCo\Cloudflare\Responses\SecurityCenterScansScans::class, []);
	}


	/**
	 * Start On-Demand Zone Scan
	 */
	public function startSecurityCenterZoneScan(): \FoundryCo\Cloudflare\Responses\SecurityCenterScansScan
	{
		return $this->client->post('/zones/' . $this->zoneId . '/security-center/insights/scans', \FoundryCo\Cloudflare\Responses\SecurityCenterScansScan::class, null);
	}
}
