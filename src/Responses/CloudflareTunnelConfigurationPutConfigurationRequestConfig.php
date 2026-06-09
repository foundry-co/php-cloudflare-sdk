<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * The tunnel configuration and ingress rules.
 */
readonly class CloudflareTunnelConfigurationPutConfigurationRequestConfig
{
	public function __construct(
		/** List of public hostname definitions. At least one ingress rule needs to be defined for the tunnel. */
		public ?array $ingress = null,
		/** Configuration parameters for the public hostname specific connection settings between cloudflared and origin server. */
		public ?CloudflareTunnelConfigurationPutConfigurationRequestConfigOriginRequest $originRequest = null,
		/** Enable private network access from WARP users to private network routes. This is enabled if the tunnel has an assigned route. */
		public ?CloudflareTunnelConfigurationPutConfigurationRequestConfigWarpRouting $warpRouting = null,
	) {
	}
}
