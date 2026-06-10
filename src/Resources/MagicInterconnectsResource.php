<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function list(?bool $xMagicNewHcTarget = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/cf_interconnects', \FoundryCo\Cloudflare\Responses\MagicInterconnectsListInterconnects::class, ['xMagicNewHcTarget' => $xMagicNewHcTarget ?? null]);
	}


	/**
	 * Update multiple interconnects
	 */
	public function update(?bool $xMagicNewHcTarget = null): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/magic/cf_interconnects', \FoundryCo\Cloudflare\Responses\MagicInterconnectsUpdateMultipleInterconnects::class, null);
	}


	/**
	 * List interconnect Details
	 */
	public function get(string $cfInterconnectId, ?bool $xMagicNewHcTarget = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/cf_interconnects/' . $cfInterconnectId, \FoundryCo\Cloudflare\Responses\MagicInterconnectsListInterconnectDetails::class, ['xMagicNewHcTarget' => $xMagicNewHcTarget ?? null]);
	}


	/**
	 * Update interconnect
	 */
	public function cfInterconnects(
		string $cfInterconnectId,
		\FoundryCo\Cloudflare\Requests\MagicInterconnectsUpdateInterconnectRequest $request,
		?bool $xMagicNewHcTarget = null,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/magic/cf_interconnects/' . $cfInterconnectId, \FoundryCo\Cloudflare\Responses\MagicInterconnectsUpdateInterconnect::class, $request);
	}
}
