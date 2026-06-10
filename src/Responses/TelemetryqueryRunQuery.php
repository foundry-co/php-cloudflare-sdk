<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class TelemetryqueryRunQuery
{
	public function __construct(
		/** If the query wasn't explcitly saved */
		public ?bool $adhoc = null,
		public ?string $created = null,
		public ?string $createdBy = null,
		public ?string $description = null,
		public ?string $id = null,
		/** Query name */
		public ?string $name = null,
		public ?TelemetryqueryRunQueryParameters $parameters = null,
		public ?string $updated = null,
		public ?string $updatedBy = null,
	) {
	}
}
