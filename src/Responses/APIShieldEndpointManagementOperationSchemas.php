<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * OpenAPI JSON schemas for an operation, including both user-uploaded and Cloudflare-learned schemas.
 */
readonly class APIShieldEndpointManagementOperationSchemas
{
	public function __construct(
		/** An OpenAPI operation object fragment containing schema information for an operation. May include parameter definitions, request body specifications, and a component schema extension. */
		public ?APIShieldEndpointManagementOperationSchemasLearned $learned = null,
		/** An OpenAPI operation object fragment containing schema information for an operation. May include parameter definitions, request body specifications, and a component schema extension. */
		public ?APIShieldEndpointManagementOperationSchemasUploaded $uploaded = null,
	) {
	}
}
