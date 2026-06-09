<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class MagicSiteLansResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Site LANs
	 */
	public function get(string $siteId): \FoundryCo\Cloudflare\Responses\MagicSiteLANsLans
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/lans', \FoundryCo\Cloudflare\Responses\MagicSiteLANsLans::class, []);
	}


	/**
	 * Create a new Site LAN
	 */
	public function create(
		string $siteId,
		\FoundryCo\Cloudflare\Requests\MagicSiteLansCreateLanRequest $request,
	): \FoundryCo\Cloudflare\Responses\MagicSiteLANsLan
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/lans', \FoundryCo\Cloudflare\Responses\MagicSiteLANsLan::class, $request);
	}


	/**
	 * Site LAN Details
	 */
	public function lans(string $siteId, string $lanId): \FoundryCo\Cloudflare\Responses\MagicSiteLANsDetails
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/lans/' . $lanId, \FoundryCo\Cloudflare\Responses\MagicSiteLANsDetails::class, []);
	}


	/**
	 * Update Site LAN
	 */
	public function update(
		string $siteId,
		string $lanId,
		\FoundryCo\Cloudflare\Requests\MagicSiteLansUpdateLanRequest $request,
	): \FoundryCo\Cloudflare\Responses\MagicSiteLANsLan
	{
		return $this->client->put('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/lans/' . $lanId, \FoundryCo\Cloudflare\Responses\MagicSiteLANsLan::class, $request);
	}


	/**
	 * Patch Site LAN
	 */
	public function magicSiteLansPatchLan(
		string $siteId,
		string $lanId,
		\FoundryCo\Cloudflare\Requests\MagicSiteLansPatchLanRequest $request,
	): \FoundryCo\Cloudflare\Responses\MagicSiteLANsLan
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/lans/' . $lanId, \FoundryCo\Cloudflare\Responses\MagicSiteLANsLan::class, $request);
	}


	/**
	 * Delete Site LAN
	 */
	public function delete(string $siteId, string $lanId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/lans/' . $lanId);
	}
}
