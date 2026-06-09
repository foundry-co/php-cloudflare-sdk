<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class APIShieldClientCertificatesResource
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
		?string $mtlsCertificateId = null,
	): \FoundryCo\Cloudflare\Responses\APIShieldClientCertificatesForAZoneAssociations
	{
		return $this->client->get('/zones/' . $this->zoneId . '/certificate_authorities/hostname_associations', \FoundryCo\Cloudflare\Responses\APIShieldClientCertificatesForAZoneAssociations::class, ['mtlsCertificateId' => $mtlsCertificateId ?? null]);
	}


	/**
	 * Replace Hostname Associations
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\ClientCertificateForAZonePutHostnameAssociationsRequest $request,
	): \FoundryCo\Cloudflare\Responses\APIShieldClientCertificatesForAZoneAssociations
	{
		return $this->client->put('/zones/' . $this->zoneId . '/certificate_authorities/hostname_associations', \FoundryCo\Cloudflare\Responses\APIShieldClientCertificatesForAZoneAssociations::class, $request);
	}


	/**
	 * List Client Certificates
	 */
	public function clientCertificates(
		?\FoundryCo\Cloudflare\Enums\APIShieldClientCertificatesForAZoneStatus $status = null,
		?float $page = null,
		?float $perPage = null,
		?int $limit = null,
		?int $offset = null,
	): \FoundryCo\Cloudflare\Responses\APIShieldClientCertificatesForAZoneCertificates
	{
		return $this->client->get('/zones/' . $this->zoneId . '/client_certificates', \FoundryCo\Cloudflare\Responses\APIShieldClientCertificatesForAZoneCertificates::class, ['status' => $status ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'limit' => $limit ?? null, 'offset' => $offset ?? null]);
	}


	/**
	 * Create Client Certificate
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\ClientCertificateForAZoneCreateClientCertificateRequest $request,
	): \FoundryCo\Cloudflare\Responses\APIShieldClientCertificatesForAZoneCertificate
	{
		return $this->client->post('/zones/' . $this->zoneId . '/client_certificates', \FoundryCo\Cloudflare\Responses\APIShieldClientCertificatesForAZoneCertificate::class, $request);
	}


	/**
	 * Client Certificate Details
	 */
	public function get(
		string $clientCertificateId,
	): \FoundryCo\Cloudflare\Responses\APIShieldClientCertificatesForAZoneDetails
	{
		return $this->client->get('/zones/' . $this->zoneId . '/client_certificates/' . $clientCertificateId, \FoundryCo\Cloudflare\Responses\APIShieldClientCertificatesForAZoneDetails::class, []);
	}


	/**
	 * Reactivate Client Certificate
	 */
	public function clientCertificateForAZoneEditClientCertificate(
		string $clientCertificateId,
		\FoundryCo\Cloudflare\Requests\ClientCertificateForAZoneEditClientCertificateRequest $request,
	): \FoundryCo\Cloudflare\Responses\APIShieldClientCertificatesForAZoneCertificate
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/client_certificates/' . $clientCertificateId, \FoundryCo\Cloudflare\Responses\APIShieldClientCertificatesForAZoneCertificate::class, $request);
	}


	/**
	 * Revoke Client Certificate
	 */
	public function delete(string $clientCertificateId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/client_certificates/' . $clientCertificateId);
	}
}
