<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class SecondaryDNSPeerResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Peers
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\SecondaryDNSPeerPeers
	{
		return $this->client->get('/accounts/' . $this->accountId . '/secondary_dns/peers', \FoundryCo\Cloudflare\Responses\SecondaryDNSPeerPeers::class, []);
	}


	/**
	 * Create Peer
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\SecondaryDnsPeerCreatePeerRequest $request,
	): \FoundryCo\Cloudflare\Responses\SecondaryDNSPeerPeer
	{
		return $this->client->post('/accounts/' . $this->accountId . '/secondary_dns/peers', \FoundryCo\Cloudflare\Responses\SecondaryDNSPeerPeer::class, $request);
	}


	/**
	 * Peer Details
	 */
	public function get(string $peerId): \FoundryCo\Cloudflare\Responses\SecondaryDNSPeerDetails
	{
		return $this->client->get('/accounts/' . $this->accountId . '/secondary_dns/peers/' . $peerId, \FoundryCo\Cloudflare\Responses\SecondaryDNSPeerDetails::class, []);
	}


	/**
	 * Update Peer
	 */
	public function update(
		string $peerId,
		\FoundryCo\Cloudflare\Requests\SecondaryDnsPeerUpdatePeerRequest $request,
	): \FoundryCo\Cloudflare\Responses\SecondaryDNSPeerPeer
	{
		return $this->client->put('/accounts/' . $this->accountId . '/secondary_dns/peers/' . $peerId, \FoundryCo\Cloudflare\Responses\SecondaryDNSPeerPeer::class, $request);
	}


	/**
	 * Delete Peer
	 */
	public function delete(string $peerId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/secondary_dns/peers/' . $peerId);
	}
}
