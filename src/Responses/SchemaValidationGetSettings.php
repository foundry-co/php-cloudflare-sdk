<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SchemaValidationGetSettings
{
	public function __construct(
		/**
		 * The default mitigation action used
		 *
		 * Mitigation actions are as follows:
		 *
		 *   - `log` - log request when request does not conform to schema
		 *   - `block` - deny access to the site when request does not conform to schema
		 *   - `none` - skip running schema validation
		 */
		public ?\FoundryCo\Cloudflare\Enums\SchemaValidationGetSettingsValidationDefaultMitigationAction $validationDefaultMitigationAction = null,
		/**
		 * When not null, this overrides global both zone level and operation level mitigation actions. This can serve as a quick way to disable schema validation for the whole zone.
		 *
		 *   - `"none"` will skip running schema validation entirely for the request
		 */
		public ?\FoundryCo\Cloudflare\Enums\SchemaValidationGetSettingsValidationOverrideMitigationAction $validationOverrideMitigationAction = null,
	) {
	}
}
