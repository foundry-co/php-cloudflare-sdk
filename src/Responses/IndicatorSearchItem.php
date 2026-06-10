<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class IndicatorSearchItem
{
	public function __construct(
		/** The indicator field to search on. Allowed: value, indicatorType. */
		public ?\FoundryCo\Cloudflare\Enums\IndicatorSearchItemField $field = null,
		/** Search operator. Use 'in' for bulk lookup of up to 100 values at once, e.g. {field:'value', op:'in', value:['evil.com','bad.org']}. */
		public ?\FoundryCo\Cloudflare\Enums\IndicatorSearchItemOp $op = null,
		/** Search value. String for most operators. Array of strings for 'in' operator (max 100 items). */
		public mixed $value = null,
	) {
	}
}
