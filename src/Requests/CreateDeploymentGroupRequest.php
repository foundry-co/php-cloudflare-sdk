<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create deployment group
 */
readonly class CreateDeploymentGroupRequest
{
	public function __construct(
		/** A user-friendly name for the deployment group. */
		public string $name,
		/** Contains at least one version configuration. */
		public array $versionConfig,
		/** Contains an optional list of policy IDs assigned to a group. */
		public ?array $policyIds = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'version_config' => $this->versionConfig,
		    'policy_ids' => $this->policyIds,
		], fn ($v) => $v !== null);
	}
}
