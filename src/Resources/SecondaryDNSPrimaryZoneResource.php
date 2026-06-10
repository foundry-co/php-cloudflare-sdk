<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class SecondaryDNSPrimaryZoneResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Primary Zone Configuration Details
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/secondary_dns/outgoing', \FoundryCo\Cloudflare\Responses\SecondaryDnsPrimaryZonePrimaryZoneConfigurationDetails::class, []);
	}


	/**
	 * Create Primary Zone Configuration
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\SecondaryDnsPrimaryZoneCreatePrimaryZoneConfigurationRequest $request,
	): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/secondary_dns/outgoing', \FoundryCo\Cloudflare\Responses\SecondaryDnsPrimaryZoneCreatePrimaryZoneConfiguration::class, $request);
	}


	/**
	 * Update Primary Zone Configuration
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\SecondaryDnsPrimaryZoneUpdatePrimaryZoneConfigurationRequest $request,
	): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/secondary_dns/outgoing', \FoundryCo\Cloudflare\Responses\SecondaryDnsPrimaryZoneUpdatePrimaryZoneConfiguration::class, $request);
	}


	/**
	 * Delete Primary Zone Configuration
	 */
	public function delete(): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/secondary_dns/outgoing');
	}


	/**
	 * Disable Outgoing Zone Transfers
	 */
	public function disable(): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/secondary_dns/outgoing/disable', null, null);
	}


	/**
	 * Enable Outgoing Zone Transfers
	 */
	public function enable(): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/secondary_dns/outgoing/enable', null, null);
	}


	/**
	 * Force DNS NOTIFY
	 */
	public function forceNotify(): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/secondary_dns/outgoing/force_notify', null, null);
	}


	/**
	 * Get Outgoing Zone Transfer Status
	 */
	public function status(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/secondary_dns/outgoing/status', null, []);
	}
}
