<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create manual build
 */
readonly class CreateManualBuildRequest
{
	public function __construct(
		/** Git branch name (required if commit_hash not provided) */
		public mixed $branch = null,
		/** Git commit hash (required if branch not provided) */
		public mixed $commitHash = null,
		public ?\FoundryCo\Cloudflare\Responses\CreateManualBuildRequestSeedRepo $seedRepo = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'branch' => $this->branch,
		    'commit_hash' => $this->commitHash,
		    'seed_repo' => $this->seedRepo?->toArray(),
		], fn ($v) => $v !== null);
	}
}
