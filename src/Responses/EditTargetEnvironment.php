<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class EditTargetEnvironment
{
	public function __construct(
		/** Target environment identifier. */
		public ?string $id = null,
		/** Human-readable name. */
		public ?string $name = null,
		/**
		 * Identifies the Cloudflare asset to scan. Uses a `type` discriminator.
		 * Currently the service supports only `zone` targets.
		 */
		public mixed $target = null,
		/** Optional description providing additional context. */
		public ?string $description = null,
	) {
	}
}
