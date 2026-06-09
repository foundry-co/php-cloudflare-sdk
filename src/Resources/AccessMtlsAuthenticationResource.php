<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AccessMtlsAuthenticationResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List mTLS certificates
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\ZoneLevelAccessMTLSAuthenticationCertificates
	{
		return $this->client->get('/zones/' . $this->zoneId . '/access/certificates', \FoundryCo\Cloudflare\Responses\ZoneLevelAccessMTLSAuthenticationCertificates::class, []);
	}


	/**
	 * Add an mTLS certificate
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\ZoneLevelAccessMtlsAuthenticationAddAnMtlsCertificateRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZoneLevelAccessMTLSAuthenticationCertificate
	{
		return $this->client->post('/zones/' . $this->zoneId . '/access/certificates', \FoundryCo\Cloudflare\Responses\ZoneLevelAccessMTLSAuthenticationCertificate::class, $request);
	}


	/**
	 * List all mTLS hostname settings
	 */
	public function settings(): \FoundryCo\Cloudflare\Responses\ZoneLevelAccessMTLSAuthenticationSettings
	{
		return $this->client->get('/zones/' . $this->zoneId . '/access/certificates/settings', \FoundryCo\Cloudflare\Responses\ZoneLevelAccessMTLSAuthenticationSettings::class, []);
	}


	/**
	 * Update an mTLS certificate's hostname settings
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\ZoneLevelAccessMtlsAuthenticationUpdateAnMtlsCertificateSettingsRequest $request,
	): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/access/certificates/settings', null, $request);
	}


	/**
	 * Get an mTLS certificate
	 */
	public function get(
		string $certificateId,
	): \FoundryCo\Cloudflare\Responses\ZoneLevelAccessMTLSAuthenticationCertificate
	{
		return $this->client->get('/zones/' . $this->zoneId . '/access/certificates/' . $certificateId, \FoundryCo\Cloudflare\Responses\ZoneLevelAccessMTLSAuthenticationCertificate::class, []);
	}


	/**
	 * Update an mTLS certificate
	 */
	public function certificates(
		string $certificateId,
		\FoundryCo\Cloudflare\Requests\ZoneLevelAccessMtlsAuthenticationUpdateAnMtlsCertificateRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZoneLevelAccessMTLSAuthenticationCertificate
	{
		return $this->client->put('/zones/' . $this->zoneId . '/access/certificates/' . $certificateId, \FoundryCo\Cloudflare\Responses\ZoneLevelAccessMTLSAuthenticationCertificate::class, $request);
	}


	/**
	 * Delete an mTLS certificate
	 */
	public function delete(string $certificateId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/access/certificates/' . $certificateId);
	}
}
