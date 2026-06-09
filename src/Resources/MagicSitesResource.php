<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class MagicSitesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Sites
	 */
	public function list(?string $connectorid = null): \FoundryCo\Cloudflare\Responses\MagicSitesSites
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/sites', \FoundryCo\Cloudflare\Responses\MagicSitesSites::class, ['connectorid' => $connectorid ?? null]);
	}


	/**
	 * Create a new Site
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\MagicSitesCreateSiteRequest $request,
	): \FoundryCo\Cloudflare\Responses\MagicSitesSite
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/sites', \FoundryCo\Cloudflare\Responses\MagicSitesSite::class, $request);
	}


	/**
	 * Site Details
	 */
	public function get(
		string $siteId,
		?bool $xMagicNewHcTarget = null,
	): \FoundryCo\Cloudflare\Responses\MagicSitesDetails
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/sites/' . $siteId, \FoundryCo\Cloudflare\Responses\MagicSitesDetails::class, ['xMagicNewHcTarget' => $xMagicNewHcTarget ?? null]);
	}


	/**
	 * Update Site
	 */
	public function update(
		string $siteId,
		\FoundryCo\Cloudflare\Requests\MagicSitesUpdateSiteRequest $request,
	): \FoundryCo\Cloudflare\Responses\MagicSitesSite
	{
		return $this->client->put('/accounts/' . $this->accountId . '/magic/sites/' . $siteId, \FoundryCo\Cloudflare\Responses\MagicSitesSite::class, $request);
	}


	/**
	 * Patch Site
	 */
	public function sites(
		string $siteId,
		\FoundryCo\Cloudflare\Requests\MagicSitesPatchSiteRequest $request,
	): \FoundryCo\Cloudflare\Responses\MagicSitesSite
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/magic/sites/' . $siteId, \FoundryCo\Cloudflare\Responses\MagicSitesSite::class, $request);
	}


	/**
	 * Delete Site
	 */
	public function delete(string $siteId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/magic/sites/' . $siteId);
	}
}
