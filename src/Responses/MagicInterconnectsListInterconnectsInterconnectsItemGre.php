<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * The configuration specific to GRE interconnects.
 */
readonly class MagicInterconnectsListInterconnectsInterconnectsItemGre
{
	public function __construct(
		/** The IP address assigned to the Cloudflare side of the GRE tunnel created as part of the Interconnect. */
		public ?string $cloudflareEndpoint = null,
	) {
	}
}
