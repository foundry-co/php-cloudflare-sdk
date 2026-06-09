<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Plugin permissions
 */
readonly class PutPresetsPresetIdRequestPermissionsPlugins
{
	public function __construct(
		/** Can close plugins that are already open */
		public bool $canClose,
		/** Can edit plugin config */
		public bool $canEditConfig,
		/** Can start plugins */
		public bool $canStart,
		/** Plugin configuration keyed by plugin UUID. */
		public array $config,
	) {
	}
}
