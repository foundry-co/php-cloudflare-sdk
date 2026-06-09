<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Enable private network access from WARP users to private network routes. This is enabled if the tunnel has an assigned route.
 */
readonly class CloudflareTunnelConfigurationPutConfigurationRequestConfigWarpRouting
{
	public function __construct(
		public ?bool $enabled = null,
	) {
	}
}
