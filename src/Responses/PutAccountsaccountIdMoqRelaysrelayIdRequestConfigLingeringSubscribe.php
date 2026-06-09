<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PutAccountsaccountIdMoqRelaysrelayIdRequestConfigLingeringSubscribe
{
	public function __construct(
		public ?bool $enabled = null,
		/** Relay-level ceiling on lingering subscribe timeout (ms). Default 30000. */
		public ?int $maxTimeoutMs = null,
	) {
	}
}
