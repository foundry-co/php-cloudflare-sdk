<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PostV4AccountsByAccountIdPipelinesV1SinksSchemaFormat
{
	public function __construct(
		public ?\FoundryCo\Cloudflare\Enums\PostV4AccountsByAccountIdPipelinesV1SinksSchemaFormatType $type = null,
		public ?\FoundryCo\Cloudflare\Enums\PostV4AccountsByAccountIdPipelinesV1SinksSchemaFormatDecimalEncoding $decimalEncoding = null,
		public ?\FoundryCo\Cloudflare\Enums\PostV4AccountsByAccountIdPipelinesV1SinksSchemaFormatTimestampFormat $timestampFormat = null,
		public ?bool $unstructured = null,
		public ?\FoundryCo\Cloudflare\Enums\PostV4AccountsByAccountIdPipelinesV1SinksSchemaFormatCompression $compression = null,
		public ?int $rowGroupBytes = null,
	) {
	}
}
