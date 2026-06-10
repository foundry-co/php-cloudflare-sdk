<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ApiShieldSchemaValidationPostSchemaSchema
{
	public function __construct(
		public mixed $createdAt = null,
		/** Kind of schema */
		public ?\FoundryCo\Cloudflare\Enums\ApiShieldSchemaValidationPostSchemaSchemaKind $kind = null,
		/** Name of the schema */
		public ?string $name = null,
		public mixed $schemaId = null,
		/** Source of the schema */
		public ?string $source = null,
		/** Flag whether schema is enabled for validation. */
		public ?bool $validationEnabled = null,
	) {
	}
}
