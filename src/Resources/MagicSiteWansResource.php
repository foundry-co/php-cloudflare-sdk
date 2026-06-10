<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class MagicSiteWansResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Site WANs
	 */
	public function get(string $siteId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/wans', \FoundryCo\Cloudflare\Responses\MagicSiteWansListWans::class, []);
	}


	/**
	 * Create a new Site WAN
	 */
	public function create(string $siteId, \FoundryCo\Cloudflare\Requests\MagicSiteWansCreateWanRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/wans', \FoundryCo\Cloudflare\Responses\MagicSiteWansCreateWan::class, $request);
	}


	/**
	 * Site WAN Details
	 */
	public function wans(string $siteId, string $wanId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/wans/' . $wanId, \FoundryCo\Cloudflare\Responses\MagicSiteWansWanDetails::class, []);
	}


	/**
	 * Update Site WAN
	 */
	public function update(
		string $siteId,
		string $wanId,
		\FoundryCo\Cloudflare\Requests\MagicSiteWansUpdateWanRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/wans/' . $wanId, \FoundryCo\Cloudflare\Responses\MagicSiteWansUpdateWan::class, $request);
	}


	/**
	 * Patch Site WAN
	 */
	public function magicSiteWansPatchWan(
		string $siteId,
		string $wanId,
		\FoundryCo\Cloudflare\Requests\MagicSiteWansPatchWanRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/wans/' . $wanId, \FoundryCo\Cloudflare\Responses\MagicSiteWansPatchWan::class, $request);
	}


	/**
	 * Delete Site WAN
	 */
	public function delete(string $siteId, string $wanId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/wans/' . $wanId);
	}
}
