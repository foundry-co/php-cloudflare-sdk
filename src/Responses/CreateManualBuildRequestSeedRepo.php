<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CreateManualBuildRequestSeedRepo
{
	public function __construct(
		/** Git branch name. */
		public ?string $branch = null,
		public ?string $owner = null,
		public ?string $path = null,
		public ?\FoundryCo\Cloudflare\Enums\CreateManualBuildRequestSeedRepoProvider $provider = null,
		public ?string $repository = null,
		public ?array $files = null,
	) {
	}
}
