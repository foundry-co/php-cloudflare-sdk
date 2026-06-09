<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class MagicCf1SitesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List CF1 Sites
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\MagicCF1SitesSites
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/cf1_sites', \FoundryCo\Cloudflare\Responses\MagicCF1SitesSites::class, []);
	}


	/**
	 * Create CF1 Sites
	 */
	public function create(): \FoundryCo\Cloudflare\Responses\MagicCF1SitesSites
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/cf1_sites', \FoundryCo\Cloudflare\Responses\MagicCF1SitesSites::class, null);
	}


	/**
	 * Get CF1 Site
	 */
	public function get(string $cf1SiteId): \FoundryCo\Cloudflare\Responses\MagicCF1SitesSite
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/cf1_sites/' . $cf1SiteId, \FoundryCo\Cloudflare\Responses\MagicCF1SitesSite::class, []);
	}


	/**
	 * Update CF1 Site
	 */
	public function update(
		string $cf1SiteId,
		\FoundryCo\Cloudflare\Requests\MagicCf1SitesUpdateCf1SiteRequest $request,
	): \FoundryCo\Cloudflare\Responses\MagicCF1SitesSite
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/magic/cf1_sites/' . $cf1SiteId, \FoundryCo\Cloudflare\Responses\MagicCF1SitesSite::class, $request);
	}


	/**
	 * Delete CF1 Site
	 */
	public function delete(string $cf1SiteId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/magic/cf1_sites/' . $cf1SiteId);
	}
}
