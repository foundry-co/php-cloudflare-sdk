<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Live tail heartbeat
 */
readonly class TelemetryliveTailheartbeatgetRequest
{
	public function __construct(
		public ?string $scriptId = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'scriptId' => $this->scriptId,
		], fn ($v) => $v !== null);
	}
}
