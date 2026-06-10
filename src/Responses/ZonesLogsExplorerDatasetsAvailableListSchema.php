<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * JSON Schema that describes the fields this dataset exposes.
 */
readonly class ZonesLogsExplorerDatasetsAvailableListSchema
{
	public function __construct(
		public ?array $properties = null,
		public ?array $required = null,
		public ?\FoundryCo\Cloudflare\Enums\ZonesLogsExplorerDatasetsAvailableListSchemaType $type = null,
	) {
	}
}
