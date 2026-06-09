<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(): \FoundryCo\Cloudflare\Responses\ContentScanningExpressions
	{
		return $this->client->get('/zones/' . $this->zoneId . '/content-upload-scan/payloads', \FoundryCo\Cloudflare\Responses\ContentScanningExpressions::class, []);
	}


	/**
	 * Add Custom Scan Expressions
	 */
	public function payloads(): \FoundryCo\Cloudflare\Responses\ContentScanningExpressions
	{
		return $this->client->post('/zones/' . $this->zoneId . '/content-upload-scan/payloads', \FoundryCo\Cloudflare\Responses\ContentScanningExpressions::class, null);
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
	public function settings(): \FoundryCo\Cloudflare\Responses\ContentScanningStatus
	{
		return $this->client->get('/zones/' . $this->zoneId . '/content-upload-scan/settings', \FoundryCo\Cloudflare\Responses\ContentScanningStatus::class, []);
	}


	/**
	 * Update Content Scanning Status
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\WafContentScanningUpdateSettingsRequest $request,
	): \FoundryCo\Cloudflare\Responses\ContentScanningSettings
	{
		return $this->client->put('/zones/' . $this->zoneId . '/content-upload-scan/settings', \FoundryCo\Cloudflare\Responses\ContentScanningSettings::class, $request);
	}
}
