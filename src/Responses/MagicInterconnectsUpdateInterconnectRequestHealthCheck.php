<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class MagicInterconnectsUpdateInterconnectRequestHealthCheck
{
	public function __construct(
		/** Determines whether to run healthchecks for a tunnel. */
		public ?bool $enabled = null,
		/** How frequent the health check is run. The default value is `mid`. */
		public ?\FoundryCo\Cloudflare\Enums\MagicInterconnectsUpdateInterconnectRequestHealthCheckRate $rate = null,
		/** The destination address in a request type health check. After the healthcheck is decapsulated at the customer end of the tunnel, the ICMP echo will be forwarded to this address. This field defaults to `customer_gre_endpoint address`. This field is ignored for bidirectional healthchecks as the interface_address (not assigned to the Cloudflare side of the tunnel) is used as the target. Must be in object form if the x-magic-new-hc-target header is set to true and string form if x-magic-new-hc-target is absent or set to false. */
		public mixed $target = null,
		/** The type of healthcheck to run, reply or request. The default value is `reply`. */
		public ?\FoundryCo\Cloudflare\Enums\MagicInterconnectsUpdateInterconnectRequestHealthCheckType $type = null,
	) {
	}
}
