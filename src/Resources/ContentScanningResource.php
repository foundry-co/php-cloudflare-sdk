<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ContentScanningResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Disable Content Scanning
	 */
	public function create(): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/content-upload-scan/disable', null, null);
	}


	/**
	 * Enable Content Scanning
	 */
	public function enable(): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/content-upload-scan/enable', null, null);
	}


	/**
	 * List Existing Custom Scan Expressions
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/content-upload-scan/payloads', \FoundryCo\Cloudflare\Responses\WafContentScanningListCustomScanExpressions::class, []);
	}


	/**
	 * Add Custom Scan Expressions
	 */
	public function payloads(): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/content-upload-scan/payloads', \FoundryCo\Cloudflare\Responses\WafContentScanningAddCustomScanExpressions::class, null);
	}


	/**
	 * Delete a Custom Scan Expression
	 */
	public function delete(mixed $expressionId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/content-upload-scan/payloads/' . $expressionId);
	}


	/**
	 * Get Content Scanning Status
	 */
	public function settings(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/content-upload-scan/settings', \FoundryCo\Cloudflare\Responses\WafContentScanningGetStatus::class, []);
	}


	/**
	 * Update Content Scanning Status
	 */
	public function update(\FoundryCo\Cloudflare\Requests\WafContentScanningUpdateSettingsRequest $request): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/content-upload-scan/settings', \FoundryCo\Cloudflare\Responses\WafContentScanningUpdateSettings::class, $request);
	}
}
