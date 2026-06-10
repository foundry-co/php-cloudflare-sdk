<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class MagicStaticRoutesDeleteRouteDeletedRoute
{
	public function __construct(
		/** Identifier */
		public ?string $id = null,
		/** The next-hop IP Address for the static route. */
		public ?string $nexthop = null,
		/** IP Prefix in Classless Inter-Domain Routing format. */
		public ?string $prefix = null,
		/** Priority of the static route. */
		public ?int $priority = null,
		/** When the route was created. */
		public ?\DateTimeImmutable $createdOn = null,
		/** An optional human provided description of the static route. */
		public ?string $description = null,
		/** When the route was last modified. */
		public ?\DateTimeImmutable $modifiedOn = null,
		/** Used only for ECMP routes. */
		public ?MagicStaticRoutesDeleteRouteDeletedRouteScope $scope = null,
		/** Optional weight of the ECMP scope - if provided. */
		public ?int $weight = null,
	) {
	}
}
