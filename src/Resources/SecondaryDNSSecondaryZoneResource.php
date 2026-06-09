<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class SecondaryDNSSecondaryZoneResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Force AXFR
	 */
	public function create(): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/secondary_dns/force_axfr', null, null);
	}


	/**
	 * Secondary Zone Configuration Details
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\SecondaryDNSSecondaryZoneDetails
	{
		return $this->client->get('/zones/' . $this->zoneId . '/secondary_dns/incoming', \FoundryCo\Cloudflare\Responses\SecondaryDNSSecondaryZoneDetails::class, []);
	}


	/**
	 * Create Secondary Zone Configuration
	 */
	public function incoming(
		\FoundryCo\Cloudflare\Requests\SecondaryDnsSecondaryZoneCreateSecondaryZoneConfigurationRequest $request,
	): \FoundryCo\Cloudflare\Responses\SecondaryDNSSecondaryZoneConfiguration
	{
		return $this->client->post('/zones/' . $this->zoneId . '/secondary_dns/incoming', \FoundryCo\Cloudflare\Responses\SecondaryDNSSecondaryZoneConfiguration::class, $request);
	}


	/**
	 * Update Secondary Zone Configuration
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\SecondaryDnsSecondaryZoneUpdateSecondaryZoneConfigurationRequest $request,
	): \FoundryCo\Cloudflare\Responses\SecondaryDNSSecondaryZoneConfiguration
	{
		return $this->client->put('/zones/' . $this->zoneId . '/secondary_dns/incoming', \FoundryCo\Cloudflare\Responses\SecondaryDNSSecondaryZoneConfiguration::class, $request);
	}


	/**
	 * Delete Secondary Zone Configuration
	 */
	public function delete(): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/secondary_dns/incoming');
	}
}
