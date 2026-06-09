<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class MagicCf1SiteRampsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List CF1 Site Ramps
	 */
	public function get(string $cf1SiteId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/cf1_sites/' . $cf1SiteId . '/ramps', null, []);
	}


	/**
	 * Create CF1 Site Ramps
	 */
	public function create(string $cf1SiteId): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/cf1_sites/' . $cf1SiteId . '/ramps', null, null);
	}


	/**
	 * Get CF1 Site Ramp
	 */
	public function ramps(string $cf1SiteId, string $rampId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/cf1_sites/' . $cf1SiteId . '/ramps/' . $rampId, null, []);
	}


	/**
	 * Delete CF1 Site Ramp
	 */
	public function delete(string $cf1SiteId, string $rampId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/magic/cf1_sites/' . $cf1SiteId . '/ramps/' . $rampId);
	}
}
