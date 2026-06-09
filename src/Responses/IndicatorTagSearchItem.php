<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class IndicatorTagSearchItem
{
	public function __construct(
		/** Tag mirror field to filter on. Allowed: value, categoryId, actorCategory, aliasGroupNames, attributionConfidence, attributionOrganization, motive, opsecLevel, originCountryISO, sophisticationLevel, priority, analyticPriority. Filters operate against the per-dataset IndicatorTag mirror (which is kept in sync with the Tags SoT by the tag-propagation workflow). */
		public \FoundryCo\Cloudflare\Enums\IndicatorTagSearchItemField $field,
		/** Search operator. Use 'in' for bulk OR within a single field, e.g. {field:"originCountryISO", op:"in", value:["IR","CN"]}. */
		public \FoundryCo\Cloudflare\Enums\IndicatorTagSearchItemOp $op,
		/** Search value. String or number for most operators. Array for 'in' (max 100 items). Country values may be passed as alpha-2, alpha-3, name, or common alias (e.g. "iran", "IR", "IRN") and are normalized to alpha-2 server-side. */
		public mixed $value = null,
	) {
	}
}
