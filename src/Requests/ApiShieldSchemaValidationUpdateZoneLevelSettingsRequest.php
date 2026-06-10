<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update zone level schema validation settings
 */
readonly class ApiShieldSchemaValidationUpdateZoneLevelSettingsRequest
{
	public function __construct(
		/**
		 * The default mitigation action used when there is no mitigation action defined on the operation
		 *
		 * Mitigation actions are as follows:
		 *
		 *   * `log` - log request when request does not conform to schema
		 *   * `block` - deny access to the site when request does not conform to schema
		 *
		 * A special value of of `none` will skip running schema validation entirely for the request when there is no mitigation action defined on the operation
		 */
		public \FoundryCo\Cloudflare\Enums\ApiShieldSchemaValidationUpdateZoneLevelSettingsRequestValidationDefaultMitigationAction $validationDefaultMitigationAction,
		/**
		 * When set, this overrides both zone level and operation level mitigation actions.
		 *
		 *   - `none` will skip running schema validation entirely for the request
		 *   - `null` indicates that no override is in place
		 *
		 * To clear any override, use the special value `disable_override` or `null`
		 */
		public ?\FoundryCo\Cloudflare\Enums\ApiShieldSchemaValidationUpdateZoneLevelSettingsRequestValidationOverrideMitigationAction $validationOverrideMitigationAction = null,
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
