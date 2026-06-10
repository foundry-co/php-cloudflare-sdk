<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ListClientTargetEnvironments
{
	public function __construct(
		/** A human-readable name for the target environment. */
		public ?string $displayName = null,
		/** The target environment identifier. */
		public ?string $targetEnvironment = null,
	) {
	}
}
