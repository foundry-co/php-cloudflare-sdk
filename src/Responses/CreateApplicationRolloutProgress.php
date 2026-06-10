<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Progress details of an application rollout.
 */
readonly class CreateApplicationRolloutProgress
{
	public function __construct(
		/** Current step being executed in the rollout process. Initialized to 0. */
		public ?int $currentStep = null,
		/** Total number of instances affected by the rollout. */
		public ?int $totalInstances = null,
		/** Total number of steps in the rollout. */
		public ?int $totalSteps = null,
		/** Number of instances updated in the rollout process. */
		public ?int $updatedInstances = null,
		/**
		 * Expected distribution of instances by version based on the current percentage split.
		 * Populated during active rollouts. Values are computed from the version percentage weights,
		 * not actual running instance counts.
		 */
		public ?CreateApplicationRolloutProgressVersionDistribution $versionDistribution = null,
	) {
	}
}
