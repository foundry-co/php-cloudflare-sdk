<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update deployment group
 */
readonly class UpdateDeploymentGroupRequest
{
	public function __construct(
		/** A user-friendly name for the deployment group. */
		public ?string $name = null,
		/** Replaces the entire list of policy IDs. */
		public ?array $policyIds = null,
		/** Replaces the entire version_config array. */
		public ?array $versionConfig = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'policy_ids' => $this->policyIds,
		    'version_config' => $this->versionConfig,
		], fn ($v) => $v !== null);
	}
}
