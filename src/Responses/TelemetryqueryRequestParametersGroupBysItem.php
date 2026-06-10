<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class TelemetryqueryRequestParametersGroupBysItem
{
	public function __construct(
		/** Data type of the group-by field. */
		public ?\FoundryCo\Cloudflare\Enums\TelemetryqueryRequestParametersGroupBysItemType $type = null,
		/** Field name to group results by (e.g. $metadata.service, $metadata.statusCode). */
		public ?string $value = null,
	) {
	}
}
