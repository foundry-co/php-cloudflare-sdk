<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update deploy hook
 */
readonly class UpdateDeployHookRequest
{
	public function __construct(
		/** Git branch name. */
		public string $branch,
		/** Deploy hook name (1-58 characters). */
		public string $deployHookName,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'branch' => $this->branch,
		    'deploy_hook_name' => $this->deployHookName,
		], fn ($v) => $v !== null);
	}
}
