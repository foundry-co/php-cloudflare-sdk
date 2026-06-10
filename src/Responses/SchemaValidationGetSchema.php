<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A schema used in schema validation
 */
readonly class SchemaValidationGetSchema
{
	public function __construct(
		public mixed $createdAt = null,
		/** The kind of the schema */
		public ?\FoundryCo\Cloudflare\Enums\SchemaValidationGetSchemaKind $kind = null,
		/** A human-readable name for the schema */
		public ?string $name = null,
		public mixed $schemaId = null,
		/** The raw schema, e.g., the OpenAPI schema, either as JSON or YAML */
		public ?string $source = null,
		/** An indicator if this schema is enabled */
		public ?bool $validationEnabled = null,
	) {
	}
}
