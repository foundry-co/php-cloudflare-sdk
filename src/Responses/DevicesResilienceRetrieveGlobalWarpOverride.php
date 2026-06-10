<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DevicesResilienceRetrieveGlobalWarpOverride
{
	public function __construct(
		/** Disconnects all devices on the account using Global WARP override. */
		public ?bool $disconnect = null,
		/** When the Global WARP override state was updated. */
		public ?\DateTimeImmutable $timestamp = null,
	) {
	}
}
