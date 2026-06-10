<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class GetV4AccountsByAccountIdPipelinesV1StreamsByStreamIdSchemaFormat
{
	public function __construct(
		public ?\FoundryCo\Cloudflare\Enums\GetV4AccountsByAccountIdPipelinesV1StreamsByStreamIdSchemaFormatType $type = null,
		public ?\FoundryCo\Cloudflare\Enums\GetV4AccountsByAccountIdPipelinesV1StreamsByStreamIdSchemaFormatDecimalEncoding $decimalEncoding = null,
		public ?\FoundryCo\Cloudflare\Enums\GetV4AccountsByAccountIdPipelinesV1StreamsByStreamIdSchemaFormatTimestampFormat $timestampFormat = null,
		public ?bool $unstructured = null,
		public ?\FoundryCo\Cloudflare\Enums\GetV4AccountsByAccountIdPipelinesV1StreamsByStreamIdSchemaFormatCompression $compression = null,
		public ?int $rowGroupBytes = null,
	) {
	}
}
