<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class GetV4AccountsByAccountIdPipelinesV1SinksBySinkIdSchemaFieldsItem
{
	public function __construct(
		public ?\FoundryCo\Cloudflare\Enums\GetV4AccountsByAccountIdPipelinesV1SinksBySinkIdSchemaFieldsItemType $type = null,
		public ?array $fields = null,
		public ?string $name = null,
		public ?array $items = null,
		public ?\FoundryCo\Cloudflare\Enums\GetV4AccountsByAccountIdPipelinesV1SinksBySinkIdSchemaFieldsItemUnit $unit = null,
		public ?string $metadataKey = null,
		public ?bool $required = null,
		public ?string $sqlName = null,
	) {
	}
}
