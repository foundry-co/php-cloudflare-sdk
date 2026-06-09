<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(): \FoundryCo\Cloudflare\Responses\DLSRegionalServicesRegions
	{
		return $this->client->get('/accounts/' . $this->accountId . '/addressing/regional_hostnames/regions', \FoundryCo\Cloudflare\Responses\DLSRegionalServicesRegions::class, []);
	}


	/**
	 * List Regional Hostnames
	 */
	public function regionalHostnames(): \FoundryCo\Cloudflare\Responses\DLSRegionalServicesList
	{
		return $this->client->get('/zones/' . $this->zoneId . '/addressing/regional_hostnames', \FoundryCo\Cloudflare\Responses\DLSRegionalServicesList::class, []);
	}


	/**
	 * Create Regional Hostname
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\DlsZoneRegionalHostnamesCreateRequest $request,
	): \FoundryCo\Cloudflare\Responses\DLSRegionalServicesCreate
	{
		return $this->client->post('/zones/' . $this->zoneId . '/addressing/regional_hostnames', \FoundryCo\Cloudflare\Responses\DLSRegionalServicesCreate::class, $request);
	}


	/**
	 * Fetch Regional Hostname
	 */
	public function get(string $hostname): \FoundryCo\Cloudflare\Responses\DLSRegionalServicesFetch
	{
		return $this->client->get('/zones/' . $this->zoneId . '/addressing/regional_hostnames/' . $hostname, \FoundryCo\Cloudflare\Responses\DLSRegionalServicesFetch::class, []);
	}


	/**
	 * Update Regional Hostname
	 */
	public function update(
		string $hostname,
		\FoundryCo\Cloudflare\Requests\DlsZoneRegionalHostnamesPatchRequest $request,
	): \FoundryCo\Cloudflare\Responses\DLSRegionalServicesPatch
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/addressing/regional_hostnames/' . $hostname, \FoundryCo\Cloudflare\Responses\DLSRegionalServicesPatch::class, $request);
	}


	/**
	 * Delete Regional Hostname
	 */
	public function delete(string $hostname): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/addressing/regional_hostnames/' . $hostname);
	}
}
