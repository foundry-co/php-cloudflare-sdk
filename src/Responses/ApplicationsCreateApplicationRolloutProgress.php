<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Progress details of an application rollout.
 */
readonly class ApplicationsCreateApplicationRolloutProgress
{
	public function __construct(
		/** Current step being executed in the rollout process. Initialized to 0. */
		public int $currentStep,
		/** Total number of instances affected by the rollout. */
		public int $totalInstances,
		/** Total number of steps in the rollout. */
		public int $totalSteps,
		/** Number of instances updated in the rollout process. */
		public int $updatedInstances,
		/**
		 * Expected distribution of instances by version based on the current percentage split.
		 * Populated during active rollouts. Values are computed from the version percentage weights,
		 * not actual running instance counts.
		 */
		public ?ApplicationsCreateApplicationRolloutProgressVersionDistribution $versionDistribution = null,
	) {
	}
}
