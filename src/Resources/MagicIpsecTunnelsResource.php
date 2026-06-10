<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class MagicIpsecTunnelsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List IPsec tunnels
	 */
	public function list(?bool $xMagicNewHcTarget = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/ipsec_tunnels', \FoundryCo\Cloudflare\Responses\MagicIpsecTunnelsListIpsecTunnels::class, ['xMagicNewHcTarget' => $xMagicNewHcTarget ?? null]);
	}


	/**
	 * Create an IPsec tunnel
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\MagicIpsecTunnelsCreateIpsecTunnelsRequest $request,
		?bool $xMagicNewHcTarget = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/ipsec_tunnels', \FoundryCo\Cloudflare\Responses\MagicIpsecTunnelsCreateIpsecTunnels::class, $request);
	}


	/**
	 * Update multiple IPsec tunnels
	 */
	public function update(?bool $xMagicNewHcTarget = null): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/magic/ipsec_tunnels', \FoundryCo\Cloudflare\Responses\MagicIpsecTunnelsUpdateMultipleIpsecTunnels::class, null);
	}


	/**
	 * Set Pre-Shared Keys (PSK) for IPsec tunnels
	 */
	public function psk(
		\FoundryCo\Cloudflare\Requests\MagicIpsecTunnelsSetPreSharedKeysForIpsecTunnelsRequest $request,
		?bool $validateOnly = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/ipsec_tunnels/psk', \FoundryCo\Cloudflare\Responses\MagicIpsecTunnelsSetPreSharedKeysForIpsecTunnels::class, $request);
	}


	/**
	 * List IPsec tunnel details
	 */
	public function get(string $ipsecTunnelId, ?bool $xMagicNewHcTarget = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/ipsec_tunnels/' . $ipsecTunnelId, \FoundryCo\Cloudflare\Responses\MagicIpsecTunnelsListIpsecTunnelDetails::class, ['xMagicNewHcTarget' => $xMagicNewHcTarget ?? null]);
	}


	/**
	 * Update IPsec Tunnel
	 */
	public function ipsecTunnels(
		string $ipsecTunnelId,
		\FoundryCo\Cloudflare\Requests\MagicIpsecTunnelsUpdateIpsecTunnelRequest $request,
		?bool $xMagicNewHcTarget = null,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/magic/ipsec_tunnels/' . $ipsecTunnelId, \FoundryCo\Cloudflare\Responses\MagicIpsecTunnelsUpdateIpsecTunnel::class, $request);
	}


	/**
	 * Delete IPsec Tunnel
	 */
	public function delete(string $ipsecTunnelId, ?bool $xMagicNewHcTarget = null): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/magic/ipsec_tunnels/' . $ipsecTunnelId);
	}


	/**
	 * Generate Pre-Shared Key (PSK) for IPsec tunnels
	 */
	public function pskGenerate(string $ipsecTunnelId): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/ipsec_tunnels/' . $ipsecTunnelId . '/psk_generate', \FoundryCo\Cloudflare\Responses\MagicIpsecTunnelsGeneratePreSharedKeyPskForIpsecTunnels::class, null);
	}
}
