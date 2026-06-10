<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Plugin permissions
 */
readonly class PostPresetsRequestPermissionsPlugins
{
	public function __construct(
		/** Can close plugins that are already open */
		public ?bool $canClose = null,
		/** Can edit plugin config */
		public ?bool $canEditConfig = null,
		/** Can start plugins */
		public ?bool $canStart = null,
		/** Plugin configuration keyed by plugin UUID. */
		public ?array $config = null,
	) {
	}
}
