<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function get(string $siteId): \FoundryCo\Cloudflare\Responses\MagicSiteWANsWans
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/wans', \FoundryCo\Cloudflare\Responses\MagicSiteWANsWans::class, []);
	}


	/**
	 * Create a new Site WAN
	 */
	public function create(
		string $siteId,
		\FoundryCo\Cloudflare\Requests\MagicSiteWansCreateWanRequest $request,
	): \FoundryCo\Cloudflare\Responses\MagicSiteWANsWan
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/wans', \FoundryCo\Cloudflare\Responses\MagicSiteWANsWan::class, $request);
	}


	/**
	 * Site WAN Details
	 */
	public function wans(string $siteId, string $wanId): \FoundryCo\Cloudflare\Responses\MagicSiteWANsDetails
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/wans/' . $wanId, \FoundryCo\Cloudflare\Responses\MagicSiteWANsDetails::class, []);
	}


	/**
	 * Update Site WAN
	 */
	public function update(
		string $siteId,
		string $wanId,
		\FoundryCo\Cloudflare\Requests\MagicSiteWansUpdateWanRequest $request,
	): \FoundryCo\Cloudflare\Responses\MagicSiteWANsWan
	{
		return $this->client->put('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/wans/' . $wanId, \FoundryCo\Cloudflare\Responses\MagicSiteWANsWan::class, $request);
	}


	/**
	 * Patch Site WAN
	 */
	public function magicSiteWansPatchWan(
		string $siteId,
		string $wanId,
		\FoundryCo\Cloudflare\Requests\MagicSiteWansPatchWanRequest $request,
	): \FoundryCo\Cloudflare\Responses\MagicSiteWANsWan
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/wans/' . $wanId, \FoundryCo\Cloudflare\Responses\MagicSiteWANsWan::class, $request);
	}


	/**
	 * Delete Site WAN
	 */
	public function delete(string $siteId, string $wanId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/wans/' . $wanId);
	}
}
