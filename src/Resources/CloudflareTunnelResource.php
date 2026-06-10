<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class CloudflareTunnelResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Cloudflare Tunnels
	 */
	public function list(
		?string $name = null,
		?bool $isDeleted = null,
		?string $existedAt = null,
		?string $uuid = null,
		?\DateTimeImmutable $wasActiveAt = null,
		?\DateTimeImmutable $wasInactiveAt = null,
		?string $includePrefix = null,
		?string $excludePrefix = null,
		?\FoundryCo\Cloudflare\Enums\CloudflareTunnelStatus $status = null,
		?float $perPage = null,
		?float $page = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cfd_tunnel', \FoundryCo\Cloudflare\Responses\CloudflareTunnelListCloudflareTunnels::class, ['name' => $name ?? null, 'isDeleted' => $isDeleted ?? null, 'existedAt' => $existedAt ?? null, 'uuid' => $uuid ?? null, 'wasActiveAt' => $wasActiveAt ?? null, 'wasInactiveAt' => $wasInactiveAt ?? null, 'includePrefix' => $includePrefix ?? null, 'excludePrefix' => $excludePrefix ?? null, 'status' => $status ?? null, 'perPage' => $perPage ?? null, 'page' => $page ?? null]);
	}


	/**
	 * Create a Cloudflare Tunnel
	 */
	public function create(\FoundryCo\Cloudflare\Requests\CloudflareTunnelCreateACloudflareTunnelRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cfd_tunnel', null, $request);
	}


	/**
	 * Get a Cloudflare Tunnel
	 */
	public function get(string $tunnelId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cfd_tunnel/' . $tunnelId, null, []);
	}


	/**
	 * Update a Cloudflare Tunnel
	 */
	public function update(
		string $tunnelId,
		\FoundryCo\Cloudflare\Requests\CloudflareTunnelUpdateACloudflareTunnelRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/cfd_tunnel/' . $tunnelId, null, $request);
	}


	/**
	 * Delete a Cloudflare Tunnel
	 */
	public function delete(string $tunnelId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/cfd_tunnel/' . $tunnelId);
	}


	/**
	 * List Cloudflare Tunnel connections
	 */
	public function connections(string $tunnelId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cfd_tunnel/' . $tunnelId . '/connections', \FoundryCo\Cloudflare\Responses\CloudflareTunnelListCloudflareTunnelConnections::class, []);
	}


	/**
	 * Clean up Cloudflare Tunnel connections
	 */
	public function cloudflareTunnelCleanUpCloudflareTunnelConnections(string $tunnelId, ?string $clientId = null): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/cfd_tunnel/' . $tunnelId . '/connections');
	}


	/**
	 * Get Cloudflare Tunnel connector
	 */
	public function connectors(string $tunnelId, string $connectorId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cfd_tunnel/' . $tunnelId . '/connectors/' . $connectorId, null, []);
	}


	/**
	 * Get a Cloudflare Tunnel management token
	 */
	public function management(
		string $tunnelId,
		\FoundryCo\Cloudflare\Requests\CloudflareTunnelGetACloudflareTunnelManagementTokenRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cfd_tunnel/' . $tunnelId . '/management', null, $request);
	}


	/**
	 * Get a Cloudflare Tunnel token
	 */
	public function token(string $tunnelId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cfd_tunnel/' . $tunnelId . '/token', null, []);
	}


	/**
	 * List All Tunnels
	 */
	public function tunnels(
		?string $name = null,
		?bool $isDeleted = null,
		?string $existedAt = null,
		?string $uuid = null,
		?\DateTimeImmutable $wasActiveAt = null,
		?\DateTimeImmutable $wasInactiveAt = null,
		?string $includePrefix = null,
		?string $excludePrefix = null,
		?array $tunTypes = null,
		?\FoundryCo\Cloudflare\Enums\CloudflareTunnelStatus $status = null,
		?float $perPage = null,
		?float $page = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/tunnels', null, ['name' => $name ?? null, 'isDeleted' => $isDeleted ?? null, 'existedAt' => $existedAt ?? null, 'uuid' => $uuid ?? null, 'wasActiveAt' => $wasActiveAt ?? null, 'wasInactiveAt' => $wasInactiveAt ?? null, 'includePrefix' => $includePrefix ?? null, 'excludePrefix' => $excludePrefix ?? null, 'tunTypes' => $tunTypes ?? null, 'status' => $status ?? null, 'perPage' => $perPage ?? null, 'page' => $page ?? null]);
	}


	/**
	 * List Warp Connector Tunnels
	 */
	public function warpConnector(
		?string $name = null,
		?bool $isDeleted = null,
		?string $existedAt = null,
		?string $uuid = null,
		?\DateTimeImmutable $wasActiveAt = null,
		?\DateTimeImmutable $wasInactiveAt = null,
		?string $includePrefix = null,
		?string $excludePrefix = null,
		?\FoundryCo\Cloudflare\Enums\CloudflareTunnelStatus $status = null,
		?float $perPage = null,
		?float $page = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/warp_connector', \FoundryCo\Cloudflare\Responses\CloudflareTunnelListWarpConnectorTunnels::class, ['name' => $name ?? null, 'isDeleted' => $isDeleted ?? null, 'existedAt' => $existedAt ?? null, 'uuid' => $uuid ?? null, 'wasActiveAt' => $wasActiveAt ?? null, 'wasInactiveAt' => $wasInactiveAt ?? null, 'includePrefix' => $includePrefix ?? null, 'excludePrefix' => $excludePrefix ?? null, 'status' => $status ?? null, 'perPage' => $perPage ?? null, 'page' => $page ?? null]);
	}


	/**
	 * Create a Warp Connector Tunnel
	 */
	public function cloudflareTunnelCreateAWarpConnectorTunnel(
		\FoundryCo\Cloudflare\Requests\CloudflareTunnelCreateAWarpConnectorTunnelRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/warp_connector', null, $request);
	}


	/**
	 * Get a Warp Connector Tunnel
	 */
	public function cloudflareTunnelGetAWarpConnectorTunnel(string $tunnelId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/warp_connector/' . $tunnelId, null, []);
	}


	/**
	 * Update a Warp Connector Tunnel
	 */
	public function cloudflareTunnelUpdateAWarpConnectorTunnel(
		string $tunnelId,
		\FoundryCo\Cloudflare\Requests\CloudflareTunnelUpdateAWarpConnectorTunnelRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/warp_connector/' . $tunnelId, null, $request);
	}


	/**
	 * Delete a Warp Connector Tunnel
	 */
	public function cloudflareTunnelDeleteAWarpConnectorTunnel(string $tunnelId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/warp_connector/' . $tunnelId);
	}


	/**
	 * List WARP Connector Tunnel connections
	 */
	public function cloudflareTunnelListWarpConnectorTunnelConnections(string $tunnelId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/warp_connector/' . $tunnelId . '/connections', \FoundryCo\Cloudflare\Responses\CloudflareTunnelListWarpConnectorTunnelConnections::class, []);
	}


	/**
	 * Get WARP Connector Tunnel connector
	 */
	public function cloudflareTunnelGetWarpConnectorTunnelConnector(string $tunnelId, string $connectorId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/warp_connector/' . $tunnelId . '/connectors/' . $connectorId, null, []);
	}


	/**
	 * Trigger a manual failover for a WARP Connector Tunnel
	 */
	public function failover(
		string $tunnelId,
		\FoundryCo\Cloudflare\Requests\CloudflareTunnelManualFailoverWarpConnectorTunnelRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/warp_connector/' . $tunnelId . '/failover', null, $request);
	}


	/**
	 * Get a Warp Connector Tunnel token
	 */
	public function cloudflareTunnelGetAWarpConnectorTunnelToken(string $tunnelId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/warp_connector/' . $tunnelId . '/token', null, []);
	}
}
