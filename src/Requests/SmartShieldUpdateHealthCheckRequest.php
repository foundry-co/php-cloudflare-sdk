<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update Health Check
 */
readonly class SmartShieldUpdateHealthCheckRequest
{
	public function __construct(
		public ?\FoundryCo\Cloudflare\Responses\SmartShieldUpdateHealthCheckRequestResult $result = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'result' => $this->result?->toArray(),
		], fn ($v) => $v !== null);
	}
}
