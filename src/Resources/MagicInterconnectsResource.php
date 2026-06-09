<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class MagicInterconnectsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List interconnects
	 */
	public function list(
		?bool $xMagicNewHcTarget = null,
	): \FoundryCo\Cloudflare\Responses\MagicInterconnectsInterconnects
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/cf_interconnects', \FoundryCo\Cloudflare\Responses\MagicInterconnectsInterconnects::class, ['xMagicNewHcTarget' => $xMagicNewHcTarget ?? null]);
	}


	/**
	 * Update multiple interconnects
	 */
	public function update(
		?bool $xMagicNewHcTarget = null,
	): \FoundryCo\Cloudflare\Responses\MagicInterconnectsInterconnects
	{
		return $this->client->put('/accounts/' . $this->accountId . '/magic/cf_interconnects', \FoundryCo\Cloudflare\Responses\MagicInterconnectsInterconnects::class, null);
	}


	/**
	 * List interconnect Details
	 */
	public function get(
		string $cfInterconnectId,
		?bool $xMagicNewHcTarget = null,
	): \FoundryCo\Cloudflare\Responses\MagicInterconnectsDetails
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/cf_interconnects/' . $cfInterconnectId, \FoundryCo\Cloudflare\Responses\MagicInterconnectsDetails::class, ['xMagicNewHcTarget' => $xMagicNewHcTarget ?? null]);
	}


	/**
	 * Update interconnect
	 */
	public function cfInterconnects(
		string $cfInterconnectId,
		\FoundryCo\Cloudflare\Requests\MagicInterconnectsUpdateInterconnectRequest $request,
		?bool $xMagicNewHcTarget = null,
	): \FoundryCo\Cloudflare\Responses\MagicInterconnectsInterconnect
	{
		return $this->client->put('/accounts/' . $this->accountId . '/magic/cf_interconnects/' . $cfInterconnectId, \FoundryCo\Cloudflare\Responses\MagicInterconnectsInterconnect::class, $request);
	}
}
