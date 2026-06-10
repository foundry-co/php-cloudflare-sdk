<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SharedquerygetEventsFieldsItem
{
	public function __construct(
		/** Field name present in the matched events. */
		public ?string $key = null,
		/** Data type of the field (string, number, or boolean). */
		public ?string $type = null,
	) {
	}
}
