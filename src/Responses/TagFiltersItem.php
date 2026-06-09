<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class TagFiltersItem
{
	public function __construct(
		/** Tag field to search on. Allowed: uuid, value, actorCategory, aliasGroupNames, attributionConfidence, attributionOrganization, categoryName, motive, opsecLevel, originCountryISO, sophisticationLevel, priority, analyticPriority. */
		public \FoundryCo\Cloudflare\Enums\TagFiltersItemField $field,
		/** Search operator. Use 'in' for bulk OR within a single field, e.g. {field:"originCountryISO", op:"in", value:["IR","CN"]}. */
		public \FoundryCo\Cloudflare\Enums\TagFiltersItemOp $op,
		/** Search value. String or number for most operators. Array for 'in' (max 100 items). Country values may be passed as alpha-2, alpha-3, name, or common alias (e.g. 'iran', 'IR', 'IRN') and are normalized to alpha-2 server-side. */
		public mixed $value = null,
	) {
	}
}
