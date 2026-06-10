<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/scans/config', \FoundryCo\Cloudflare\Responses\GetConfigFetch::class, []);
	}


	/**
	 * Create a new Scan Config
	 */
	public function create(\FoundryCo\Cloudflare\Requests\PostConfigCreateRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/scans/config', \FoundryCo\Cloudflare\Responses\PostConfigCreate::class, $request);
	}


	/**
	 * Update an existing Scan Config
	 */
	public function update(string $configId, \FoundryCo\Cloudflare\Requests\PostConfigUpdateRequest $request): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/cloudforce-one/scans/config/' . $configId, \FoundryCo\Cloudflare\Responses\PostConfigUpdate::class, $request);
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
	public function get(string $configId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/scans/results/' . $configId, \FoundryCo\Cloudflare\Responses\GetGetOpenPorts::class, []);
	}


	/**
	 * List Scans
	 */
	public function scans(?int $page = null, ?int $perPage = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/vuln_scanner/scans', \FoundryCo\Cloudflare\Responses\ListScans::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create Scan
	 */
	public function createScan(): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/vuln_scanner/scans', \FoundryCo\Cloudflare\Responses\CreateScan::class, null);
	}


	/**
	 * Get Scan
	 */
	public function getScan(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/vuln_scanner/scans/' . $scanId, \FoundryCo\Cloudflare\Responses\GetScan::class, []);
	}


	/**
	 * Delete Scan
	 */
	public function deleteScan(): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/vuln_scanner/scans/' . $scanId);
	}
}
