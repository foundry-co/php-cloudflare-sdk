<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Edit Target Environment
 */
readonly class EditTargetEnvironmentRequest
{
	public function __construct(
		/**
		 * Optional description. Omit to leave unchanged, set to `null`
		 * to clear, or provide a string to update.
		 */
		public ?string $description = null,
		/** Human-readable name. */
		public ?string $name = null,
		/**
		 * Identifies the Cloudflare asset to scan. Uses a `type` discriminator.
		 * Currently the service supports only `zone` targets.
		 */
		public mixed $target = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'description' => $this->description,
		    'name' => $this->name,
		    'target' => $this->target,
		], fn ($v) => $v !== null);
	}
}
