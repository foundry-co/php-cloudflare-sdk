<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AccountRequestTracerResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Request Trace
	 */
	public function create(\FoundryCo\Cloudflare\Requests\AccountRequestTracerRequestTraceRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/request-tracer/trace', \FoundryCo\Cloudflare\Responses\AccountRequestTracerRequestTrace::class, $request);
	}
}
