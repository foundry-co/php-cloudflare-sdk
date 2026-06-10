<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AuthenticatedOriginPullsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List Certificates
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/origin_tls_client_auth', \FoundryCo\Cloudflare\Responses\ZoneLevelAuthenticatedOriginPullsListCertificates::class, []);
	}


	/**
	 * Upload Certificate
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\ZoneLevelAuthenticatedOriginPullsUploadCertificateRequest $request,
	): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/origin_tls_client_auth', \FoundryCo\Cloudflare\Responses\ZoneLevelAuthenticatedOriginPullsUploadCertificate::class, $request);
	}


	/**
	 * Get Enablement Setting for Zone
	 */
	public function settings(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/origin_tls_client_auth/settings', \FoundryCo\Cloudflare\Responses\ZoneLevelAuthenticatedOriginPullsGetEnablementSettingForZone::class, []);
	}


	/**
	 * Set Enablement for Zone
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\ZoneLevelAuthenticatedOriginPullsSetEnablementForZoneRequest $request,
	): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/origin_tls_client_auth/settings', \FoundryCo\Cloudflare\Responses\ZoneLevelAuthenticatedOriginPullsSetEnablementForZone::class, $request);
	}


	/**
	 * Get Certificate Details
	 */
	public function get(string $certificateId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/origin_tls_client_auth/' . $certificateId, \FoundryCo\Cloudflare\Responses\ZoneLevelAuthenticatedOriginPullsGetCertificateDetails::class, []);
	}


	/**
	 * Delete Certificate
	 */
	public function delete(string $certificateId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/origin_tls_client_auth/' . $certificateId);
	}
}
