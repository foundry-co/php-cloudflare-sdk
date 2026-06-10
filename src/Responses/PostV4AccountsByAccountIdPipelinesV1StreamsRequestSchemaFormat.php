<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PostV4AccountsByAccountIdPipelinesV1StreamsRequestSchemaFormat
{
	public function __construct(
		public ?\FoundryCo\Cloudflare\Enums\PostV4AccountsByAccountIdPipelinesV1StreamsRequestSchemaFormatType $type = null,
		public ?\FoundryCo\Cloudflare\Enums\PostV4AccountsByAccountIdPipelinesV1StreamsRequestSchemaFormatDecimalEncoding $decimalEncoding = null,
		public ?\FoundryCo\Cloudflare\Enums\PostV4AccountsByAccountIdPipelinesV1StreamsRequestSchemaFormatTimestampFormat $timestampFormat = null,
		public ?bool $unstructured = null,
		public ?\FoundryCo\Cloudflare\Enums\PostV4AccountsByAccountIdPipelinesV1StreamsRequestSchemaFormatCompression $compression = null,
		public ?int $rowGroupBytes = null,
	) {
	}
}
