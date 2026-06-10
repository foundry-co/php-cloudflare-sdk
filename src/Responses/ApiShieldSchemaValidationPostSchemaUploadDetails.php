<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ApiShieldSchemaValidationPostSchemaUploadDetails
{
	public function __construct(
		/** Diagnostic warning events that occurred during processing. These events are non-critical errors found within the schema. */
		public ?array $warnings = null,
	) {
	}
}
