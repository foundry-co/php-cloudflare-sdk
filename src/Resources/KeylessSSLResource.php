<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class KeylessSSLResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List Keyless SSL Configurations
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\KeylessSSLForAZoneConfigurations
	{
		return $this->client->get('/zones/' . $this->zoneId . '/keyless_certificates', \FoundryCo\Cloudflare\Responses\KeylessSSLForAZoneConfigurations::class, []);
	}


	/**
	 * Create Keyless SSL Configuration
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\KeylessSslForAZoneCreateKeylessSslConfigurationRequest $request,
	): \FoundryCo\Cloudflare\Responses\KeylessSSLForAZoneConfiguration
	{
		return $this->client->post('/zones/' . $this->zoneId . '/keyless_certificates', \FoundryCo\Cloudflare\Responses\KeylessSSLForAZoneConfiguration::class, $request);
	}


	/**
	 * Get Keyless SSL Configuration
	 */
	public function get(string $keylessCertificateId): \FoundryCo\Cloudflare\Responses\KeylessSSLForAZoneConfiguration
	{
		return $this->client->get('/zones/' . $this->zoneId . '/keyless_certificates/' . $keylessCertificateId, \FoundryCo\Cloudflare\Responses\KeylessSSLForAZoneConfiguration::class, []);
	}


	/**
	 * Edit Keyless SSL Configuration
	 */
	public function update(
		string $keylessCertificateId,
		\FoundryCo\Cloudflare\Requests\KeylessSslForAZoneEditKeylessSslConfigurationRequest $request,
	): \FoundryCo\Cloudflare\Responses\KeylessSSLForAZoneConfiguration
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/keyless_certificates/' . $keylessCertificateId, \FoundryCo\Cloudflare\Responses\KeylessSSLForAZoneConfiguration::class, $request);
	}


	/**
	 * Delete Keyless SSL Configuration
	 */
	public function delete(string $keylessCertificateId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/keyless_certificates/' . $keylessCertificateId);
	}
}
