<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class URLScannerDeprecatedResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get raw response
	 */
	public function get(string $responseId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/urlscanner/response/' . $responseId, null, []);
	}


	/**
	 * Search URL scans
	 */
	public function list(
		?string $scanId = null,
		?int $limit = null,
		?string $nextCursor = null,
		?\DateTimeImmutable $dateStart = null,
		?\DateTimeImmutable $dateEnd = null,
		?string $url = null,
		?string $hostname = null,
		?string $path = null,
		?string $ip = null,
		?string $hash = null,
		?string $pageUrl = null,
		?string $pageHostname = null,
		?string $pagePath = null,
		?string $pageAsn = null,
		?string $pageIp = null,
		?bool $accountScans = null,
		?bool $isMalicious = null,
	): \FoundryCo\Cloudflare\Responses\URLScannerDeprecatedScans
	{
		return $this->client->get('/accounts/' . $this->accountId . '/urlscanner/scan', \FoundryCo\Cloudflare\Responses\URLScannerDeprecatedScans::class, ['scanId' => $scanId ?? null, 'limit' => $limit ?? null, 'nextCursor' => $nextCursor ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'url' => $url ?? null, 'hostname' => $hostname ?? null, 'path' => $path ?? null, 'ip' => $ip ?? null, 'hash' => $hash ?? null, 'pageUrl' => $pageUrl ?? null, 'pageHostname' => $pageHostname ?? null, 'pagePath' => $pagePath ?? null, 'pageAsn' => $pageAsn ?? null, 'pageIp' => $pageIp ?? null, 'accountScans' => $accountScans ?? null, 'isMalicious' => $isMalicious ?? null]);
	}


	/**
	 * Create URL Scan
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\UrlscannerCreateScanRequest $request,
	): \FoundryCo\Cloudflare\Responses\URLScannerDeprecatedScan
	{
		return $this->client->post('/accounts/' . $this->accountId . '/urlscanner/scan', \FoundryCo\Cloudflare\Responses\URLScannerDeprecatedScan::class, $request);
	}


	/**
	 * Get URL scan
	 */
	public function scan(string $scanId, ?bool $full = null): \FoundryCo\Cloudflare\Responses\URLScannerDeprecatedScan
	{
		return $this->client->get('/accounts/' . $this->accountId . '/urlscanner/scan/' . $scanId, \FoundryCo\Cloudflare\Responses\URLScannerDeprecatedScan::class, ['full' => $full ?? null]);
	}


	/**
	 * Get URL scan's HAR
	 */
	public function har(string $scanId): \FoundryCo\Cloudflare\Responses\URLScannerDeprecatedHar
	{
		return $this->client->get('/accounts/' . $this->accountId . '/urlscanner/scan/' . $scanId . '/har', \FoundryCo\Cloudflare\Responses\URLScannerDeprecatedHar::class, []);
	}


	/**
	 * Get screenshot
	 */
	public function screenshot(
		string $scanId,
		?\FoundryCo\Cloudflare\Enums\URLScannerDeprecatedResolution $resolution = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/urlscanner/scan/' . $scanId . '/screenshot', null, ['resolution' => $resolution ?? null]);
	}
}
