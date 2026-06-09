<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * The configuration specific to GRE interconnects.
 */
readonly class MagicInterconnectsInterconnectModifiedInterconnectGre
{
	public function __construct(
		/** The IP address assigned to the Cloudflare side of the GRE tunnel created as part of the Interconnect. */
		public ?string $cloudflareEndpoint = null,
	) {
	}
}
