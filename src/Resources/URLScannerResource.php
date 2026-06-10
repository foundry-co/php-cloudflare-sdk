<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class URLScannerResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Bulk create URL Scans
	 */
	public function create(): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/urlscanner/v2/bulk', null, null);
	}


	/**
	 * Get URL scan's DOM
	 */
	public function get(string $scanId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/urlscanner/v2/dom/' . $scanId, null, []);
	}


	/**
	 * Get URL scan's HAR
	 */
	public function har(string $scanId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/urlscanner/v2/har/' . $scanId, null, []);
	}


	/**
	 * Get raw response
	 */
	public function responses(string $responseId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/urlscanner/v2/responses/' . $responseId, null, []);
	}


	/**
	 * Get URL scan
	 */
	public function result(string $scanId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/urlscanner/v2/result/' . $scanId, null, []);
	}


	/**
	 * Create URL Scan
	 */
	public function scan(\FoundryCo\Cloudflare\Requests\UrlscannerCreateScanV2Request $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/urlscanner/v2/scan', null, $request);
	}


	/**
	 * Get screenshot
	 */
	public function screenshotsPng(
		string $scanId,
		?\FoundryCo\Cloudflare\Enums\URLScannerResolution $resolution = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/urlscanner/v2/screenshots/' . $scanId . '.png', null, ['resolution' => $resolution ?? null]);
	}


	/**
	 * Search URL scans
	 */
	public function list(?int $size = null, ?string $q = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/urlscanner/v2/search', null, ['size' => $size ?? null, 'q' => $q ?? null]);
	}
}
