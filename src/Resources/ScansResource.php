<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ScansResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Scan Configs
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\ScansConfigFetch
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/scans/config', \FoundryCo\Cloudflare\Responses\ScansConfigFetch::class, []);
	}


	/**
	 * Create a new Scan Config
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\PostConfigCreateRequest $request,
	): \FoundryCo\Cloudflare\Responses\ScansConfigCreate
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/scans/config', \FoundryCo\Cloudflare\Responses\ScansConfigCreate::class, $request);
	}


	/**
	 * Update an existing Scan Config
	 */
	public function update(
		string $configId,
		\FoundryCo\Cloudflare\Requests\PostConfigUpdateRequest $request,
	): \FoundryCo\Cloudflare\Responses\ScansConfigUpdate
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/cloudforce-one/scans/config/' . $configId, \FoundryCo\Cloudflare\Responses\ScansConfigUpdate::class, $request);
	}


	/**
	 * Delete a Scan Config
	 */
	public function delete(string $configId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/cloudforce-one/scans/config/' . $configId);
	}


	/**
	 * Get the Latest Scan Result
	 */
	public function get(string $configId): \FoundryCo\Cloudflare\Responses\ScansGetOpenPorts
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/scans/results/' . $configId, \FoundryCo\Cloudflare\Responses\ScansGetOpenPorts::class, []);
	}


	/**
	 * List Scans
	 */
	public function scans(?int $page = null, ?int $perPage = null): \FoundryCo\Cloudflare\Responses\ScansScans
	{
		return $this->client->get('/accounts/' . $this->accountId . '/vuln_scanner/scans', \FoundryCo\Cloudflare\Responses\ScansScans::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create Scan
	 */
	public function createScan(): \FoundryCo\Cloudflare\Support\PaginatedResponse
	{
		return $this->client->post('/accounts/' . $this->accountId . '/vuln_scanner/scans', \FoundryCo\Cloudflare\Responses\ScansScan::class, null);
	}


	/**
	 * Get Scan
	 */
	public function getScan(): \FoundryCo\Cloudflare\Support\PaginatedResponse
	{
		return $this->client->get('/accounts/' . $this->accountId . '/vuln_scanner/scans/' . $scanId, \FoundryCo\Cloudflare\Responses\ScansScan::class, []);
	}


	/**
	 * Delete Scan
	 */
	public function deleteScan(): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/vuln_scanner/scans/' . $scanId);
	}
}
