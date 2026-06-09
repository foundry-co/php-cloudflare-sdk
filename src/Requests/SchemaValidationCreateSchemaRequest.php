<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Upload a schema
 */
readonly class SchemaValidationCreateSchemaRequest
{
	public function __construct(
		/** The kind of the schema */
		public \FoundryCo\Cloudflare\Enums\SchemaValidationCreateSchemaRequestKind $kind,
		/** A human-readable name for the schema */
		public string $name,
		/** The raw schema, e.g., the OpenAPI schema, either as JSON or YAML */
		public string $source,
		/** An indicator if this schema is enabled */
		public bool $validationEnabled,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'kind' => $this->kind->value,
		    'name' => $this->name,
		    'source' => $this->source,
		    'validation_enabled' => $this->validationEnabled,
		], fn ($v) => $v !== null);
	}
}
