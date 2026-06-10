<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function get(string $siteId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/lans', \FoundryCo\Cloudflare\Responses\MagicSiteLansListLans::class, []);
	}


	/**
	 * Create a new Site LAN
	 */
	public function create(string $siteId, \FoundryCo\Cloudflare\Requests\MagicSiteLansCreateLanRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/lans', \FoundryCo\Cloudflare\Responses\MagicSiteLansCreateLan::class, $request);
	}


	/**
	 * Site LAN Details
	 */
	public function lans(string $siteId, string $lanId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/lans/' . $lanId, \FoundryCo\Cloudflare\Responses\MagicSiteLansLanDetails::class, []);
	}


	/**
	 * Update Site LAN
	 */
	public function update(
		string $siteId,
		string $lanId,
		\FoundryCo\Cloudflare\Requests\MagicSiteLansUpdateLanRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/lans/' . $lanId, \FoundryCo\Cloudflare\Responses\MagicSiteLansUpdateLan::class, $request);
	}


	/**
	 * Patch Site LAN
	 */
	public function magicSiteLansPatchLan(
		string $siteId,
		string $lanId,
		\FoundryCo\Cloudflare\Requests\MagicSiteLansPatchLanRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/lans/' . $lanId, \FoundryCo\Cloudflare\Responses\MagicSiteLansPatchLan::class, $request);
	}


	/**
	 * Delete Site LAN
	 */
	public function delete(string $siteId, string $lanId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/lans/' . $lanId);
	}
}
