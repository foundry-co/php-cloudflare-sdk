<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CreateManualBuildRequestSeedRepo
{
	public function __construct(
		/** Git branch name. */
		public string $branch,
		public string $owner,
		public string $path,
		public \FoundryCo\Cloudflare\Enums\CreateManualBuildRequestSeedRepoProvider $provider,
		public string $repository,
		public ?array $files = null,
	) {
	}
}
