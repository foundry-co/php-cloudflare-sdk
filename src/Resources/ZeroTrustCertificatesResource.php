<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ZeroTrustCertificatesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Zero Trust certificates
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\ZeroTrustCertificatesCertificates
	{
		return $this->client->get('/accounts/' . $this->accountId . '/gateway/certificates', \FoundryCo\Cloudflare\Responses\ZeroTrustCertificatesCertificates::class, []);
	}


	/**
	 * Create Zero Trust certificate
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\ZeroTrustCertificatesCreateZeroTrustCertificateRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZeroTrustCertificatesCertificate
	{
		return $this->client->post('/accounts/' . $this->accountId . '/gateway/certificates', \FoundryCo\Cloudflare\Responses\ZeroTrustCertificatesCertificate::class, $request);
	}


	/**
	 * Get Zero Trust certificate details
	 */
	public function get(string $certificateId): \FoundryCo\Cloudflare\Responses\ZeroTrustCertificatesDetails
	{
		return $this->client->get('/accounts/' . $this->accountId . '/gateway/certificates/' . $certificateId, \FoundryCo\Cloudflare\Responses\ZeroTrustCertificatesDetails::class, []);
	}


	/**
	 * Delete Zero Trust certificate
	 */
	public function delete(string $certificateId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/gateway/certificates/' . $certificateId);
	}


	/**
	 * Activate a Zero Trust certificate
	 */
	public function activate(string $certificateId): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/gateway/certificates/' . $certificateId . '/activate', null, null);
	}


	/**
	 * Deactivate a Zero Trust certificate
	 */
	public function deactivate(string $certificateId): \FoundryCo\Cloudflare\Responses\ZeroTrustCertificatesCertificate
	{
		return $this->client->post('/accounts/' . $this->accountId . '/gateway/certificates/' . $certificateId . '/deactivate', \FoundryCo\Cloudflare\Responses\ZeroTrustCertificatesCertificate::class, null);
	}
}
