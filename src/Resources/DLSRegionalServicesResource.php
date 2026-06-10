<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DLSRegionalServicesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * List Regions
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/addressing/regional_hostnames/regions', \FoundryCo\Cloudflare\Responses\DlsAccountRegionalHostnamesListRegions::class, []);
	}


	/**
	 * List Regional Hostnames
	 */
	public function regionalHostnames(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/addressing/regional_hostnames', \FoundryCo\Cloudflare\Responses\DlsZoneRegionalHostnamesList::class, []);
	}


	/**
	 * Create Regional Hostname
	 */
	public function create(\FoundryCo\Cloudflare\Requests\DlsZoneRegionalHostnamesCreateRequest $request): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/addressing/regional_hostnames', \FoundryCo\Cloudflare\Responses\DlsZoneRegionalHostnamesCreate::class, $request);
	}


	/**
	 * Fetch Regional Hostname
	 */
	public function get(string $hostname): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/addressing/regional_hostnames/' . $hostname, \FoundryCo\Cloudflare\Responses\DlsZoneRegionalHostnamesFetch::class, []);
	}


	/**
	 * Update Regional Hostname
	 */
	public function update(
		string $hostname,
		\FoundryCo\Cloudflare\Requests\DlsZoneRegionalHostnamesPatchRequest $request,
	): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/addressing/regional_hostnames/' . $hostname, \FoundryCo\Cloudflare\Responses\DlsZoneRegionalHostnamesPatch::class, $request);
	}


	/**
	 * Delete Regional Hostname
	 */
	public function delete(string $hostname): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/addressing/regional_hostnames/' . $hostname);
	}
}
