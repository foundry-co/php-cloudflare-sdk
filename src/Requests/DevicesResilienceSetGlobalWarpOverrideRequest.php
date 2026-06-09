<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Set Global WARP override state
 */
readonly class DevicesResilienceSetGlobalWarpOverrideRequest
{
	public function __construct(
		/** Disconnects all devices on the account using Global WARP override. */
		public bool $disconnect,
		/** Reasoning for setting the Global WARP override state. This will be surfaced in the audit log. */
		public ?string $justification = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'disconnect' => $this->disconnect,
		    'justification' => $this->justification,
		], fn ($v) => $v !== null);
	}
}
