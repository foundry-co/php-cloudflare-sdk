<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class OriginCAResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * List Certificates
	 */
	public function list(
		?float $page = null,
		?float $perPage = null,
		?int $limit = null,
		?int $offset = null,
	): \FoundryCo\Cloudflare\Responses\OriginCACertificates
	{
		return $this->client->get('/certificates', \FoundryCo\Cloudflare\Responses\OriginCACertificates::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'limit' => $limit ?? null, 'offset' => $offset ?? null]);
	}


	/**
	 * Create Certificate
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\OriginCaCreateCertificateRequest $request,
	): \FoundryCo\Cloudflare\Responses\OriginCACertificate
	{
		return $this->client->post('/certificates', \FoundryCo\Cloudflare\Responses\OriginCACertificate::class, $request);
	}


	/**
	 * Get Certificate
	 */
	public function get(string $certificateId): \FoundryCo\Cloudflare\Responses\OriginCACertificate
	{
		return $this->client->get('/certificates/' . $certificateId, \FoundryCo\Cloudflare\Responses\OriginCACertificate::class, []);
	}


	/**
	 * Revoke Certificate
	 */
	public function delete(string $certificateId): void
	{
		$this->client->delete('/certificates/' . $certificateId);
	}
}
