<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/gateway/certificates', \FoundryCo\Cloudflare\Responses\ZeroTrustCertificatesListZeroTrustCertificates::class, []);
	}


	/**
	 * Create Zero Trust certificate
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\ZeroTrustCertificatesCreateZeroTrustCertificateRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/gateway/certificates', \FoundryCo\Cloudflare\Responses\ZeroTrustCertificatesCreateZeroTrustCertificate::class, $request);
	}


	/**
	 * Get Zero Trust certificate details
	 */
	public function get(string $certificateId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/gateway/certificates/' . $certificateId, \FoundryCo\Cloudflare\Responses\ZeroTrustCertificatesZeroTrustCertificateDetails::class, []);
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
	public function deactivate(string $certificateId): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/gateway/certificates/' . $certificateId . '/deactivate', \FoundryCo\Cloudflare\Responses\ZeroTrustCertificatesDeactivateZeroTrustCertificate::class, null);
	}
}
