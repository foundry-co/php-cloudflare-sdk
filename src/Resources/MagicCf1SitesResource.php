<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/cf1_sites', \FoundryCo\Cloudflare\Responses\MagicCf1SitesListCf1Sites::class, []);
	}


	/**
	 * Create CF1 Sites
	 */
	public function create(): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/cf1_sites', \FoundryCo\Cloudflare\Responses\MagicCf1SitesCreateCf1Sites::class, null);
	}


	/**
	 * Get CF1 Site
	 */
	public function get(string $cf1SiteId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/cf1_sites/' . $cf1SiteId, \FoundryCo\Cloudflare\Responses\MagicCf1SitesGetCf1Site::class, []);
	}


	/**
	 * Update CF1 Site
	 */
	public function update(
		string $cf1SiteId,
		\FoundryCo\Cloudflare\Requests\MagicCf1SitesUpdateCf1SiteRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/magic/cf1_sites/' . $cf1SiteId, \FoundryCo\Cloudflare\Responses\MagicCf1SitesUpdateCf1Site::class, $request);
	}


	/**
	 * Delete CF1 Site
	 */
	public function delete(string $cf1SiteId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/magic/cf1_sites/' . $cf1SiteId);
	}
}
