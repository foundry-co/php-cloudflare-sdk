<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PostV4AccountsByAccountIdPipelinesV1SinksRequestSchemaFormat
{
	public function __construct(
		public ?\FoundryCo\Cloudflare\Enums\PostV4AccountsByAccountIdPipelinesV1SinksRequestSchemaFormatType $type = null,
		public ?\FoundryCo\Cloudflare\Enums\PostV4AccountsByAccountIdPipelinesV1SinksRequestSchemaFormatDecimalEncoding $decimalEncoding = null,
		public ?\FoundryCo\Cloudflare\Enums\PostV4AccountsByAccountIdPipelinesV1SinksRequestSchemaFormatTimestampFormat $timestampFormat = null,
		public ?bool $unstructured = null,
		public ?\FoundryCo\Cloudflare\Enums\PostV4AccountsByAccountIdPipelinesV1SinksRequestSchemaFormatCompression $compression = null,
		public ?int $rowGroupBytes = null,
	) {
	}
}
