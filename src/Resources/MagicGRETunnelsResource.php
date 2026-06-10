<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class MagicGRETunnelsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List GRE tunnels
	 */
	public function list(?bool $xMagicNewHcTarget = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/gre_tunnels', \FoundryCo\Cloudflare\Responses\MagicGreTunnelsListGreTunnels::class, ['xMagicNewHcTarget' => $xMagicNewHcTarget ?? null]);
	}


	/**
	 * Create a GRE tunnel
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\MagicGreTunnelsCreateGreTunnelsRequest $request,
		?bool $xMagicNewHcTarget = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/gre_tunnels', \FoundryCo\Cloudflare\Responses\MagicGreTunnelsCreateGreTunnels::class, $request);
	}


	/**
	 * Update multiple GRE tunnels
	 */
	public function update(?bool $xMagicNewHcTarget = null): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/magic/gre_tunnels', \FoundryCo\Cloudflare\Responses\MagicGreTunnelsUpdateMultipleGreTunnels::class, null);
	}


	/**
	 * List GRE Tunnel Details
	 */
	public function get(string $greTunnelId, ?bool $xMagicNewHcTarget = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/gre_tunnels/' . $greTunnelId, \FoundryCo\Cloudflare\Responses\MagicGreTunnelsListGreTunnelDetails::class, ['xMagicNewHcTarget' => $xMagicNewHcTarget ?? null]);
	}


	/**
	 * Update GRE Tunnel
	 */
	public function greTunnels(
		string $greTunnelId,
		\FoundryCo\Cloudflare\Requests\MagicGreTunnelsUpdateGreTunnelRequest $request,
		?bool $xMagicNewHcTarget = null,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/magic/gre_tunnels/' . $greTunnelId, \FoundryCo\Cloudflare\Responses\MagicGreTunnelsUpdateGreTunnel::class, $request);
	}


	/**
	 * Delete GRE Tunnel
	 */
	public function delete(string $greTunnelId, ?bool $xMagicNewHcTarget = null): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/magic/gre_tunnels/' . $greTunnelId);
	}
}
