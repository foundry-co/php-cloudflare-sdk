<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AccessSAMLEncryptionCertificatesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List SAML certificate sets
	 */
	public function list(
		?int $page = null,
		?int $perPage = null,
		?string $id = null,
	): \FoundryCo\Cloudflare\Responses\AccessSAMLEncryptionCertificatesSets
	{
		return $this->client->get('/accounts/' . $this->accountId . '/access/saml_certificates', \FoundryCo\Cloudflare\Responses\AccessSAMLEncryptionCertificatesSets::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'id' => $id ?? null]);
	}


	/**
	 * Get SAML certificate set
	 */
	public function get(string $samlCertSetId): \FoundryCo\Cloudflare\Responses\AccessSAMLEncryptionCertificatesSet
	{
		return $this->client->get('/accounts/' . $this->accountId . '/access/saml_certificates/' . $samlCertSetId, \FoundryCo\Cloudflare\Responses\AccessSAMLEncryptionCertificatesSet::class, []);
	}


	/**
	 * Download current certificate in PEM format
	 */
	public function pem(string $samlCertSetId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/access/saml_certificates/' . $samlCertSetId . '/pem', null, []);
	}


	/**
	 * Rotate SAML certificate
	 */
	public function create(
		string $samlCertSetId,
	): \FoundryCo\Cloudflare\Responses\AccessSAMLEncryptionCertificatesCertificate
	{
		return $this->client->post('/accounts/' . $this->accountId . '/access/saml_certificates/' . $samlCertSetId . '/rotate', \FoundryCo\Cloudflare\Responses\AccessSAMLEncryptionCertificatesCertificate::class, null);
	}
}
