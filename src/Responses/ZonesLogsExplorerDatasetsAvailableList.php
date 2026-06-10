<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A dataset type that the account or zone can create.
 */
readonly class ZonesLogsExplorerDatasetsAvailableList
{
	public function __construct(
		/** Dataset type name (e.g. `http_requests`). */
		public ?string $dataset = null,
		/** Whether this dataset type is account-scoped or zone-scoped. */
		public ?\FoundryCo\Cloudflare\Enums\ZonesLogsExplorerDatasetsAvailableListObjectType $objectType = null,
		/** JSON Schema that describes the fields this dataset exposes. */
		public ?ZonesLogsExplorerDatasetsAvailableListSchema $schema = null,
		/** The primary timestamp field name for this dataset. */
		public ?string $timestampField = null,
	) {
	}
}
