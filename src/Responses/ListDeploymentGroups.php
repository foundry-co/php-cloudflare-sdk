<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ListDeploymentGroups
{
	public function __construct(
		/** The RFC3339Nano timestamp when the deployment group was created. */
		public ?string $createdAt = null,
		/** The ID of the deployment group. */
		public ?string $id = null,
		/** A user-friendly name for the deployment group. */
		public ?string $name = null,
		/** The RFC3339Nano timestamp when the deployment group was last updated. */
		public ?string $updatedAt = null,
		/** Contains version configurations for different target environments. */
		public ?array $versionConfig = null,
		/** Contains a list of policy IDs assigned to this deployment group. */
		public ?array $policyIds = null,
	) {
	}
}
