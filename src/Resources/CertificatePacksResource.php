<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class CertificatePacksResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List Certificate Packs
	 */
	public function list(
		?float $page = null,
		?float $perPage = null,
		?\FoundryCo\Cloudflare\Enums\CertificatePacksStatus $status = null,
		?\FoundryCo\Cloudflare\Enums\CertificatePacksDeploy $deploy = null,
	): \FoundryCo\Cloudflare\Responses\CertificatePacksPacks
	{
		return $this->client->get('/zones/' . $this->zoneId . '/ssl/certificate_packs', \FoundryCo\Cloudflare\Responses\CertificatePacksPacks::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'status' => $status ?? null, 'deploy' => $deploy ?? null]);
	}


	/**
	 * Order Advanced Certificate Manager Certificate Pack
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\CertificatePacksOrderAdvancedCertificateManagerCertificatePackRequest $request,
	): \FoundryCo\Cloudflare\Responses\CertificatePacksPack
	{
		return $this->client->post('/zones/' . $this->zoneId . '/ssl/certificate_packs/order', \FoundryCo\Cloudflare\Responses\CertificatePacksPack::class, $request);
	}


	/**
	 * Get Certificate Pack Quotas
	 */
	public function quota(): \FoundryCo\Cloudflare\Responses\CertificatePacksQuotas
	{
		return $this->client->get('/zones/' . $this->zoneId . '/ssl/certificate_packs/quota', \FoundryCo\Cloudflare\Responses\CertificatePacksQuotas::class, []);
	}


	/**
	 * Get Certificate Pack
	 */
	public function get(string $certificatePackId): \FoundryCo\Cloudflare\Responses\CertificatePacksPack
	{
		return $this->client->get('/zones/' . $this->zoneId . '/ssl/certificate_packs/' . $certificatePackId, \FoundryCo\Cloudflare\Responses\CertificatePacksPack::class, []);
	}


	/**
	 * Restart Validation or Update Advanced Certificate Manager Certificate Pack
	 */
	public function update(
		string $certificatePackId,
		\FoundryCo\Cloudflare\Requests\CertificatePacksRestartValidationForAdvancedCertificateManagerCertificatePackRequest $request,
	): \FoundryCo\Cloudflare\Responses\CertificatePacksPack
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/ssl/certificate_packs/' . $certificatePackId, \FoundryCo\Cloudflare\Responses\CertificatePacksPack::class, $request);
	}


	/**
	 * Delete Advanced Certificate Manager Certificate Pack
	 */
	public function delete(string $certificatePackId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/ssl/certificate_packs/' . $certificatePackId);
	}
}
