<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AnalyzeCertificateResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Analyze Certificate
	 */
	public function create(\FoundryCo\Cloudflare\Requests\AnalyzeCertificateAnalyzeCertificateRequest $request): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/ssl/analyze', null, $request);
	}
}
