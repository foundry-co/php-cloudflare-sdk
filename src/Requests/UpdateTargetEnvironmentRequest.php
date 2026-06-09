<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update Target Environment
 */
readonly class UpdateTargetEnvironmentRequest
{
	public function __construct(
		/** Human-readable name. */
		public string $name,
		/**
		 * Identifies the Cloudflare asset to scan. Uses a `type` discriminator.
		 * Currently the service supports only `zone` targets.
		 */
		public mixed $target,
		/** Optional description. */
		public ?string $description = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'target' => $this->target,
		    'description' => $this->description,
		], fn ($v) => $v !== null);
	}
}
