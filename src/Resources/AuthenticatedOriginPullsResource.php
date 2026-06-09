<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(): \FoundryCo\Cloudflare\Responses\ZoneLevelAuthenticatedOriginPullsCertificates
	{
		return $this->client->get('/zones/' . $this->zoneId . '/origin_tls_client_auth', \FoundryCo\Cloudflare\Responses\ZoneLevelAuthenticatedOriginPullsCertificates::class, []);
	}


	/**
	 * Upload Certificate
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\ZoneLevelAuthenticatedOriginPullsUploadCertificateRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZoneLevelAuthenticatedOriginPullsCertificate
	{
		return $this->client->post('/zones/' . $this->zoneId . '/origin_tls_client_auth', \FoundryCo\Cloudflare\Responses\ZoneLevelAuthenticatedOriginPullsCertificate::class, $request);
	}


	/**
	 * Get Enablement Setting for Zone
	 */
	public function settings(): \FoundryCo\Cloudflare\Responses\ZoneLevelAuthenticatedOriginPullsZone
	{
		return $this->client->get('/zones/' . $this->zoneId . '/origin_tls_client_auth/settings', \FoundryCo\Cloudflare\Responses\ZoneLevelAuthenticatedOriginPullsZone::class, []);
	}


	/**
	 * Set Enablement for Zone
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\ZoneLevelAuthenticatedOriginPullsSetEnablementForZoneRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZoneLevelAuthenticatedOriginPullsZone
	{
		return $this->client->put('/zones/' . $this->zoneId . '/origin_tls_client_auth/settings', \FoundryCo\Cloudflare\Responses\ZoneLevelAuthenticatedOriginPullsZone::class, $request);
	}


	/**
	 * Get Certificate Details
	 */
	public function get(string $certificateId): \FoundryCo\Cloudflare\Responses\ZoneLevelAuthenticatedOriginPullsDetails
	{
		return $this->client->get('/zones/' . $this->zoneId . '/origin_tls_client_auth/' . $certificateId, \FoundryCo\Cloudflare\Responses\ZoneLevelAuthenticatedOriginPullsDetails::class, []);
	}


	/**
	 * Delete Certificate
	 */
	public function delete(string $certificateId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/origin_tls_client_auth/' . $certificateId);
	}
}
