<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetAsnsAsSetAsSetsItem
{
	public function __construct(
		/** The number of AS members in the AS-SET */
		public ?int $asMembersCount = null,
		/** The number of AS-SET members in the AS-SET */
		public ?int $asSetMembersCount = null,
		/** The number of recursive upstream AS-SETs */
		public ?int $asSetUpstreamsCount = null,
		/** The number of unique ASNs in the AS-SETs recursive downstream */
		public ?int $asnConeSize = null,
		/** The IRR sources of the AS-SET */
		public ?array $irrSources = null,
		/** The name of the AS-SET */
		public ?string $name = null,
		/** The AS number following hierarchical AS-SET name */
		public ?int $hierarchicalAsn = null,
		/** The inferred AS number of the AS-SET */
		public ?int $inferredAsn = null,
		/** The AS number matching PeeringDB record */
		public ?int $peeringdbAsn = null,
	) {
	}
}
