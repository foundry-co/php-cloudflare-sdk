<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Edit details of a schema to enable validation
 */
readonly class SchemaValidationEditSchemaRequest
{
	public function __construct(
		/** Flag whether schema is enabled for validation. */
		public ?bool $validationEnabled = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'validation_enabled' => $this->validationEnabled,
		], fn ($v) => $v !== null);
	}
}
