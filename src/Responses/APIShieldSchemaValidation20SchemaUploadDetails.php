<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class APIShieldSchemaValidation20SchemaUploadDetails
{
	public function __construct(
		/** Diagnostic warning events that occurred during processing. These events are non-critical errors found within the schema. */
		public ?array $warnings = null,
	) {
	}
}
