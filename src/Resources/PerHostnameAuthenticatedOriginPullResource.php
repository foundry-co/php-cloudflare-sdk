<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class PerHostnameAuthenticatedOriginPullResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List Hostname Associations
	 */
	public function list(
		?float $page = null,
		?float $perPage = null,
		?\FoundryCo\Cloudflare\Enums\PerHostnameAuthenticatedOriginPullStatus $status = null,
	): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/origin_tls_client_auth/hostnames', \FoundryCo\Cloudflare\Responses\PerHostnameAuthenticatedOriginPullListHostnameAssociations::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'status' => $status ?? null]);
	}


	/**
	 * Enable or Disable a Hostname for Client Authentication
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\PerHostnameAuthenticatedOriginPullEnableOrDisableAHostnameForClientAuthenticationRequest $request,
	): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/origin_tls_client_auth/hostnames', \FoundryCo\Cloudflare\Responses\PerHostnameAuthenticatedOriginPullEnableOrDisableAHostnameForClientAuthentication::class, $request);
	}


	/**
	 * List Certificates
	 */
	public function certificates(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/origin_tls_client_auth/hostnames/certificates', \FoundryCo\Cloudflare\Responses\PerHostnameAuthenticatedOriginPullListCertificates::class, []);
	}


	/**
	 * Upload a Hostname Client Certificate
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\PerHostnameAuthenticatedOriginPullUploadAHostnameClientCertificateRequest $request,
	): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/origin_tls_client_auth/hostnames/certificates', \FoundryCo\Cloudflare\Responses\PerHostnameAuthenticatedOriginPullUploadAHostnameClientCertificate::class, $request);
	}


	/**
	 * Get the Hostname Client Certificate
	 */
	public function get(string $certificateId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/origin_tls_client_auth/hostnames/certificates/' . $certificateId, \FoundryCo\Cloudflare\Responses\PerHostnameAuthenticatedOriginPullGetTheHostnameClientCertificate::class, []);
	}


	/**
	 * Delete Hostname Client Certificate
	 */
	public function delete(string $certificateId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/origin_tls_client_auth/hostnames/certificates/' . $certificateId);
	}


	/**
	 * Get the Hostname Status for Client Authentication
	 */
	public function hostnames(string $hostname): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/origin_tls_client_auth/hostnames/' . $hostname, \FoundryCo\Cloudflare\Responses\PerHostnameAuthenticatedOriginPullGetTheHostnameStatusForClientAuthentication::class, []);
	}
}
