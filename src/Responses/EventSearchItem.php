<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class EventSearchItem
{
	public function __construct(
		/** Event field to search on. Allowed: attacker, attackerCountry, category, createdAt, date, event, indicator, indicatorType, killChain, mitreAttack, tags, targetCountry, targetIndustry, tlp, uuid. */
		public ?string $field = null,
		/** Search operator. Use 'in' for bulk lookup of up to 100 values at once, e.g. {field:'tags', op:'in', value:['malware','apt']}. */
		public ?\FoundryCo\Cloudflare\Enums\EventSearchItemOp $op = null,
		/** Search value. String or number for most operators. Array for 'in' operator (max 100 items). */
		public mixed $value = null,
	) {
	}
}
