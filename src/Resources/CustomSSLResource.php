<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/custom_certificates', \FoundryCo\Cloudflare\Responses\CustomSslForAZoneListSslConfigurations::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'match' => $match ?? null, 'status' => $status ?? null]);
	}


	/**
	 * Create SSL Configuration
	 */
	public function create(\FoundryCo\Cloudflare\Requests\CustomSslForAZoneCreateSslConfigurationRequest $request): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/custom_certificates', \FoundryCo\Cloudflare\Responses\CustomSslForAZoneCreateSslConfiguration::class, $request);
	}


	/**
	 * Re-prioritize SSL Certificates
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\CustomSslForAZoneRePrioritizeSslCertificatesRequest $request,
	): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/custom_certificates/prioritize', \FoundryCo\Cloudflare\Responses\CustomSslForAZoneRePrioritizeSslCertificates::class, $request);
	}


	/**
	 * SSL Configuration Details
	 */
	public function get(string $customCertificateId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/custom_certificates/' . $customCertificateId, \FoundryCo\Cloudflare\Responses\CustomSslForAZoneSslConfigurationDetails::class, []);
	}


	/**
	 * Edit SSL Configuration
	 */
	public function customCertificates(
		string $customCertificateId,
		\FoundryCo\Cloudflare\Requests\CustomSslForAZoneEditSslConfigurationRequest $request,
	): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/custom_certificates/' . $customCertificateId, \FoundryCo\Cloudflare\Responses\CustomSslForAZoneEditSslConfiguration::class, $request);
	}


	/**
	 * Delete SSL Configuration
	 */
	public function delete(string $customCertificateId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/custom_certificates/' . $customCertificateId);
	}
}
