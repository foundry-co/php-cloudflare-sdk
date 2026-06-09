<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarAutonomousSystemsSetAsSetsItem
{
	public function __construct(
		/** The number of AS members in the AS-SET */
		public int $asMembersCount,
		/** The number of AS-SET members in the AS-SET */
		public int $asSetMembersCount,
		/** The number of recursive upstream AS-SETs */
		public int $asSetUpstreamsCount,
		/** The number of unique ASNs in the AS-SETs recursive downstream */
		public int $asnConeSize,
		/** The IRR sources of the AS-SET */
		public array $irrSources,
		/** The name of the AS-SET */
		public string $name,
		/** The AS number following hierarchical AS-SET name */
		public ?int $hierarchicalAsn = null,
		/** The inferred AS number of the AS-SET */
		public ?int $inferredAsn = null,
		/** The AS number matching PeeringDB record */
		public ?int $peeringdbAsn = null,
	) {
	}
}
