<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class APIShieldSchemaValidation20Schemas
{
	public function __construct(
		public mixed $createdAt,
		/** Kind of schema */
		public \FoundryCo\Cloudflare\Enums\APIShieldSchemaValidation20SchemasKind $kind,
		/** Name of the schema */
		public string $name,
		public mixed $schemaId,
		/** Source of the schema */
		public ?string $source = null,
		/** Flag whether schema is enabled for validation. */
		public ?bool $validationEnabled = null,
	) {
	}
}
