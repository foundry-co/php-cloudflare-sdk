<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class CustomSSLResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List SSL Configurations
	 */
	public function list(
		?float $page = null,
		?float $perPage = null,
		?\FoundryCo\Cloudflare\Enums\CustomSSLForAZoneMatch $match = null,
		?\FoundryCo\Cloudflare\Enums\CustomSSLForAZoneStatus $status = null,
	): \FoundryCo\Cloudflare\Responses\CustomSSLForAZoneConfigurations
	{
		return $this->client->get('/zones/' . $this->zoneId . '/custom_certificates', \FoundryCo\Cloudflare\Responses\CustomSSLForAZoneConfigurations::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'match' => $match ?? null, 'status' => $status ?? null]);
	}


	/**
	 * Create SSL Configuration
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\CustomSslForAZoneCreateSslConfigurationRequest $request,
	): \FoundryCo\Cloudflare\Responses\CustomSSLForAZoneConfiguration
	{
		return $this->client->post('/zones/' . $this->zoneId . '/custom_certificates', \FoundryCo\Cloudflare\Responses\CustomSSLForAZoneConfiguration::class, $request);
	}


	/**
	 * Re-prioritize SSL Certificates
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\CustomSslForAZoneRePrioritizeSslCertificatesRequest $request,
	): \FoundryCo\Cloudflare\Responses\CustomSSLForAZoneCertificates
	{
		return $this->client->put('/zones/' . $this->zoneId . '/custom_certificates/prioritize', \FoundryCo\Cloudflare\Responses\CustomSSLForAZoneCertificates::class, $request);
	}


	/**
	 * SSL Configuration Details
	 */
	public function get(string $customCertificateId): \FoundryCo\Cloudflare\Responses\CustomSSLForAZoneDetails
	{
		return $this->client->get('/zones/' . $this->zoneId . '/custom_certificates/' . $customCertificateId, \FoundryCo\Cloudflare\Responses\CustomSSLForAZoneDetails::class, []);
	}


	/**
	 * Edit SSL Configuration
	 */
	public function customCertificates(
		string $customCertificateId,
		\FoundryCo\Cloudflare\Requests\CustomSslForAZoneEditSslConfigurationRequest $request,
	): \FoundryCo\Cloudflare\Responses\CustomSSLForAZoneConfiguration
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/custom_certificates/' . $customCertificateId, \FoundryCo\Cloudflare\Responses\CustomSSLForAZoneConfiguration::class, $request);
	}


	/**
	 * Delete SSL Configuration
	 */
	public function delete(string $customCertificateId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/custom_certificates/' . $customCertificateId);
	}
}
