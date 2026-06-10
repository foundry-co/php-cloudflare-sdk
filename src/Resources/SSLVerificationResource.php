<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class SSLVerificationResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * SSL Verification Details
	 */
	public function list(?\FoundryCo\Cloudflare\Enums\SSLVerificationRetry $retry = null): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/ssl/verification', \FoundryCo\Cloudflare\Responses\SslVerificationSslVerificationDetails::class, ['retry' => $retry ?? null]);
	}


	/**
	 * Edit SSL Certificate Pack Validation Method
	 */
	public function update(
		string $certificatePackId,
		\FoundryCo\Cloudflare\Requests\SslVerificationEditSslCertificatePackValidationMethodRequest $request,
	): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/ssl/verification/' . $certificatePackId, \FoundryCo\Cloudflare\Responses\SslVerificationEditSslCertificatePackValidationMethod::class, $request);
	}
}
