<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/secondary_dns/incoming', \FoundryCo\Cloudflare\Responses\SecondaryDnsSecondaryZoneSecondaryZoneConfigurationDetails::class, []);
	}


	/**
	 * Create Secondary Zone Configuration
	 */
	public function incoming(
		\FoundryCo\Cloudflare\Requests\SecondaryDnsSecondaryZoneCreateSecondaryZoneConfigurationRequest $request,
	): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/secondary_dns/incoming', \FoundryCo\Cloudflare\Responses\SecondaryDnsSecondaryZoneCreateSecondaryZoneConfiguration::class, $request);
	}


	/**
	 * Update Secondary Zone Configuration
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\SecondaryDnsSecondaryZoneUpdateSecondaryZoneConfigurationRequest $request,
	): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/secondary_dns/incoming', \FoundryCo\Cloudflare\Responses\SecondaryDnsSecondaryZoneUpdateSecondaryZoneConfiguration::class, $request);
	}


	/**
	 * Delete Secondary Zone Configuration
	 */
	public function delete(): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/secondary_dns/incoming');
	}
}
