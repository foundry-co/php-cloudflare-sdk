<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class MagicStaticRoutesDetailsRoute
{
	public function __construct(
		/** Identifier */
		public string $id,
		/** The next-hop IP Address for the static route. */
		public string $nexthop,
		/** IP Prefix in Classless Inter-Domain Routing format. */
		public string $prefix,
		/** Priority of the static route. */
		public int $priority,
		/** When the route was created. */
		public ?\DateTimeImmutable $createdOn = null,
		/** An optional human provided description of the static route. */
		public ?string $description = null,
		/** When the route was last modified. */
		public ?\DateTimeImmutable $modifiedOn = null,
		/** Used only for ECMP routes. */
		public ?MagicStaticRoutesDetailsRouteScope $scope = null,
		/** Optional weight of the ECMP scope - if provided. */
		public ?int $weight = null,
	) {
	}
}
