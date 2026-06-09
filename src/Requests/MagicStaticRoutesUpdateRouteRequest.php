<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update Route
 */
readonly class MagicStaticRoutesUpdateRouteRequest
{
	public function __construct(
		/** The next-hop IP Address for the static route. */
		public string $nexthop,
		/** IP Prefix in Classless Inter-Domain Routing format. */
		public string $prefix,
		/** Priority of the static route. */
		public int $priority,
		/** An optional human provided description of the static route. */
		public ?string $description = null,
		/** Used only for ECMP routes. */
		public ?\FoundryCo\Cloudflare\Responses\MagicStaticRoutesUpdateRouteRequestScope $scope = null,
		/** Optional weight of the ECMP scope - if provided. */
		public ?int $weight = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'nexthop' => $this->nexthop,
		    'prefix' => $this->prefix,
		    'priority' => $this->priority,
		    'description' => $this->description,
		    'scope' => $this->scope?->toArray(),
		    'weight' => $this->weight,
		], fn ($v) => $v !== null);
	}
}
