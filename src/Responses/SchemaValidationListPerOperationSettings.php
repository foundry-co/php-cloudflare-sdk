<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SchemaValidationListPerOperationSettings
{
	public function __construct(
		/**
		 * When set, this applies a mitigation action to this operation which supersedes a global schema validation setting just for this operation
		 *
		 *   - `"log"` - log request when request does not conform to schema for this operation
		 *   - `"block"` - deny access to the site when request does not conform to schema for this operation
		 *   - `"none"` - will skip mitigation for this operation
		 */
		public ?\FoundryCo\Cloudflare\Enums\SchemaValidationListPerOperationSettingsMitigationAction $mitigationAction = null,
		public mixed $operationId = null,
	) {
	}
}
