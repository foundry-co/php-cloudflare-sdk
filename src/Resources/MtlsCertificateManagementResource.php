<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class MtlsCertificateManagementResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List mTLS certificates
	 */
	public function list(?array $type = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/mtls_certificates', \FoundryCo\Cloudflare\Responses\MTlsCertificateManagementListMTlsCertificates::class, ['type' => $type ?? null]);
	}


	/**
	 * Upload mTLS certificate
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\MTlsCertificateManagementUploadMTlsCertificateRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/mtls_certificates', \FoundryCo\Cloudflare\Responses\MTlsCertificateManagementUploadMTlsCertificate::class, $request);
	}


	/**
	 * Get mTLS certificate
	 */
	public function get(string $mtlsCertificateId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/mtls_certificates/' . $mtlsCertificateId, \FoundryCo\Cloudflare\Responses\MTlsCertificateManagementGetMTlsCertificate::class, []);
	}


	/**
	 * Delete mTLS certificate
	 */
	public function delete(string $mtlsCertificateId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/mtls_certificates/' . $mtlsCertificateId);
	}


	/**
	 * List mTLS certificate associations
	 */
	public function associations(string $mtlsCertificateId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/mtls_certificates/' . $mtlsCertificateId . '/associations', \FoundryCo\Cloudflare\Responses\MTlsCertificateManagementListMTlsCertificateAssociations::class, []);
	}
}
