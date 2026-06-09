<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class QueryRunResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Run a query
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\TelemetryqueryRequest $request,
	): \FoundryCo\Cloudflare\Responses\QueryRunTelemetryquery
	{
		return $this->client->post('/accounts/' . $this->accountId . '/workers/observability/telemetry/query', \FoundryCo\Cloudflare\Responses\QueryRunTelemetryquery::class, $request);
	}
}
