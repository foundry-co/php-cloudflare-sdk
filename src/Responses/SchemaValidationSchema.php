<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A schema used in schema validation
 */
readonly class SchemaValidationSchema
{
	public function __construct(
		public mixed $createdAt,
		/** The kind of the schema */
		public \FoundryCo\Cloudflare\Enums\SchemaValidationSchemaKind $kind,
		/** A human-readable name for the schema */
		public string $name,
		public mixed $schemaId,
		/** The raw schema, e.g., the OpenAPI schema, either as JSON or YAML */
		public string $source,
		/** An indicator if this schema is enabled */
		public ?bool $validationEnabled = null,
	) {
	}
}
