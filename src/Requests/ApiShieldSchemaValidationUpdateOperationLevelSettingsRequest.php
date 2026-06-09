<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update operation-level schema validation settings
 */
readonly class ApiShieldSchemaValidationUpdateOperationLevelSettingsRequest
{
	public function __construct(
		/**
		 * When set, this applies a mitigation action to this operation
		 *
		 *   - `log` log request when request does not conform to schema for this operation
		 *   - `block` deny access to the site when request does not conform to schema for this operation
		 *   - `none` will skip mitigation for this operation
		 *   - `null` indicates that no operation level mitigation is in place, see Zone Level Schema Validation Settings for mitigation action that will be applied
		 */
		public ?\FoundryCo\Cloudflare\Enums\ApiShieldSchemaValidationUpdateOperationLevelSettingsRequestMitigationAction $mitigationAction = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'mitigation_action' => $this->mitigationAction?->value,
		], fn ($v) => $v !== null);
	}
}
