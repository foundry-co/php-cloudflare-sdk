<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class KeysResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List keys
	 */
	public function create(\FoundryCo\Cloudflare\Requests\TelemetrykeyslistRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/workers/observability/telemetry/keys', \FoundryCo\Cloudflare\Responses\Telemetrykeyslist::class, $request);
	}
}
