<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class LoadBalancerPoolsCreatePoolRequestOriginsItem
{
	public function __construct(
		/** The IP address (IPv4 or IPv6) of the origin, or its publicly addressable hostname. Hostnames entered here should resolve directly to the origin, and not be a hostname proxied by Cloudflare. To set an internal/reserved address, virtual_network_id must also be set. */
		public ?string $address = null,
		/** This field shows up only if the origin is disabled. This field is set with the time the origin was disabled. */
		public ?\DateTimeImmutable $disabledAt = null,
		/** Whether to enable (the default) this origin within the pool. Disabled origins will not receive traffic and are excluded from health checks. The origin will only be disabled for the current pool. */
		public ?bool $enabled = null,
		/** Whether to flatten CNAME records for this origin, resolving them to A/AAAA records before returning to the client. When true (the default), the director resolves CNAME addresses to their underlying A/AAAA records. When false, the origin address is returned as a raw CNAME record without resolution. This setting mirrors the DNS API record flatten_cname setting. */
		public ?bool $flattenCname = null,
		/** The request header is used to pass additional information with an HTTP request. Currently supported header is 'Host'. */
		public ?LoadBalancerPoolsCreatePoolRequestOriginsItemHeader $header = null,
		/** A human-identifiable name for the origin. */
		public ?string $name = null,
		/** The port for upstream connections. A value of 0 means the default port for the protocol will be used. */
		public ?int $port = null,
		/** The virtual network subnet ID the origin belongs in. Virtual network must also belong to the account. */
		public ?string $virtualNetworkId = null,
		/**
		 * The weight of this origin relative to other origins in the pool. Based on the configured weight the total traffic is distributed among origins within the pool.
		 * - `origin_steering.policy="least_outstanding_requests"`: Use weight to scale the origin's outstanding requests.
		 * - `origin_steering.policy="least_connections"`: Use weight to scale the origin's open connections.
		 */
		public ?float $weight = null,
	) {
	}
}
