<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class LiveTailResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Prepare live tail
	 */
	public function create(\FoundryCo\Cloudflare\Requests\TelemetryliveTailpostRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/workers/observability/telemetry/live-tail', \FoundryCo\Cloudflare\Responses\TelemetryliveTailpost::class, $request);
	}


	/**
	 * Live tail heartbeat
	 */
	public function heartbeat(\FoundryCo\Cloudflare\Requests\TelemetryliveTailheartbeatgetRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/workers/observability/telemetry/live-tail/heartbeat', null, $request);
	}
}
