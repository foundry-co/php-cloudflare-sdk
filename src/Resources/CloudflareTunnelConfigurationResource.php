<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class CloudflareTunnelConfigurationResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get configuration
	 */
	public function get(string $tunnelId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cfd_tunnel/' . $tunnelId . '/configurations', \FoundryCo\Cloudflare\Responses\CloudflareTunnelConfigurationGetConfiguration::class, []);
	}


	/**
	 * Put configuration
	 */
	public function update(
		string $tunnelId,
		\FoundryCo\Cloudflare\Requests\CloudflareTunnelConfigurationPutConfigurationRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/cfd_tunnel/' . $tunnelId . '/configurations', \FoundryCo\Cloudflare\Responses\CloudflareTunnelConfigurationPutConfiguration::class, $request);
	}


	/**
	 * Get WARP Connector HA configuration
	 */
	public function configurations(string $tunnelId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/warp_connector/' . $tunnelId . '/configurations', \FoundryCo\Cloudflare\Responses\CloudflareTunnelConfigurationGetWarpConnectorConfiguration::class, []);
	}


	/**
	 * Update WARP Connector HA configuration
	 */
	public function cloudflareTunnelConfigurationUpdateWarpConnectorConfiguration(
		string $tunnelId,
		\FoundryCo\Cloudflare\Requests\CloudflareTunnelConfigurationUpdateWarpConnectorConfigurationRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/warp_connector/' . $tunnelId . '/configurations', \FoundryCo\Cloudflare\Responses\CloudflareTunnelConfigurationUpdateWarpConnectorConfiguration::class, $request);
	}
}
