<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class TargetEnvironmentsEnvironments
{
	public function __construct(
		/** Target environment identifier. */
		public string $id,
		/** Human-readable name. */
		public string $name,
		/**
		 * Identifies the Cloudflare asset to scan. Uses a `type` discriminator.
		 * Currently the service supports only `zone` targets.
		 */
		public mixed $target,
		/** Optional description providing additional context. */
		public ?string $description = null,
	) {
	}
}
