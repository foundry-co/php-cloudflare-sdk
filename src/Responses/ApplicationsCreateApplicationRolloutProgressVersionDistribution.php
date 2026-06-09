<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Expected distribution of instances by version based on the current percentage split.
 * Populated during active rollouts. Values are computed from the version percentage weights,
 * not actual running instance counts.
 */
readonly class ApplicationsCreateApplicationRolloutProgressVersionDistribution
{
	public function __construct(
		/** Expected number of instances remaining on the current (old) version based on the current percentage split. Only populated for "rolling" strategy. */
		public ?int $currentVersionInstances = null,
		/**
		 * The percentage of new instances being scheduled on the current version (100 - target_version_percentage).
		 * Only populated for "new_instances" strategy.
		 */
		public ?int $currentVersionPercentage = null,
		/** Expected number of instances scheduled for the target (new) version based on the current percentage split. Only populated for "rolling" strategy. */
		public ?int $targetVersionInstances = null,
		/**
		 * The active percentage of new instances being scheduled on the target version.
		 * For "rolling", this reflects the step_size.percentage of the current active step.
		 * For "new_instances", this reflects the user-set percentage.
		 */
		public ?int $targetVersionPercentage = null,
	) {
	}
}
