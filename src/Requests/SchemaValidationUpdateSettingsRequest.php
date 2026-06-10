<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update global schema validation settings
 */
readonly class SchemaValidationUpdateSettingsRequest
{
	public function __construct(
		/**
		 * The default mitigation action used
		 * Mitigation actions are as follows:
		 *
		 *   - `"log"` - log request when request does not conform to schema
		 *   - `"block"` - deny access to the site when request does not conform to schema
		 *   - `"none"` - skip running schema validation
		 */
		public \FoundryCo\Cloudflare\Enums\SchemaValidationUpdateSettingsRequestValidationDefaultMitigationAction $validationDefaultMitigationAction,
		/**
		 * When set, this overrides both zone level and operation level mitigation actions.
		 *
		 *   - `"none"` - skip running schema validation entirely for the request
		 *   - `null` - clears any existing override
		 */
		public ?\FoundryCo\Cloudflare\Enums\SchemaValidationUpdateSettingsRequestValidationOverrideMitigationAction $validationOverrideMitigationAction = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'validation_default_mitigation_action' => $this->validationDefaultMitigationAction->value,
		    'validation_override_mitigation_action' => $this->validationOverrideMitigationAction?->value,
		], fn ($v) => $v !== null);
	}
}
