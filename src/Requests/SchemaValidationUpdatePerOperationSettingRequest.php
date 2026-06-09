<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update per-operation schema validation setting
 */
readonly class SchemaValidationUpdatePerOperationSettingRequest
{
	public function __construct(
		/**
		 * When set, this applies a mitigation action to this operation
		 *
		 *   - `"log"` - log request when request does not conform to schema for this operation
		 *   - `"block"` - deny access to the site when request does not conform to schema for this operation
		 *   - `"none"` - will skip mitigation for this operation
		 *   - `null` - clears any mitigation action
		 */
		public \FoundryCo\Cloudflare\Enums\SchemaValidationUpdatePerOperationSettingRequestMitigationAction $mitigationAction,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'mitigation_action' => $this->mitigationAction->value,
		], fn ($v) => $v !== null);
	}
}
