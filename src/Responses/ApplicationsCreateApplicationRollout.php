<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Represents the status and metadata of a rollout process for an application.
 * For "rolling" strategy: includes steps and progress with instance counts.
 * For "new_instances" strategy: steps and progress are omitted. Use percentage,
 * version_distribution, and health.summary for status.
 */
readonly class ApplicationsCreateApplicationRollout
{
	public function __construct(
		/** UTC timestamp string in ISO 8601 format */
		public string $createdAt,
		/** Properties required to modify a cloudchamber deployment specified by the user. */
		public ApplicationsCreateApplicationRolloutCurrentConfiguration $currentConfiguration,
		/** Current application version before the rollout. */
		public int $currentVersion,
		public string $description,
		public ApplicationsCreateApplicationRolloutHealth $health,
		/** An identifier for a specific rollout within an application. */
		public string $id,
		/**
		 * Kind of the rollout process.
		 *  - "full_auto": For rolling rollouts, starts progressing steps upon rollout creation. For new_instances rollouts, advances percentage targets automatically after target-version health is observed.
		 *  - "full_manual": Requires manually progressing each step in the rollout using the UpdateRollout's action paramater.
		 *  - "durable_objects_auto": Default when the application is a DO application.
		 */
		public \FoundryCo\Cloudflare\Enums\ApplicationsCreateApplicationRolloutKind $kind,
		/** UTC timestamp string in ISO 8601 format */
		public string $lastUpdatedAt,
		/** Current status of the rollout. */
		public \FoundryCo\Cloudflare\Enums\ApplicationsCreateApplicationRolloutStatus $status,
		/**
		 * The rollout strategy.
		 * - "rolling": Step-based rollout with health gates. Actively replaces instances to reach each step's target percentage. Response includes steps and progress.
		 * - "new_instances": Percentage control over version distribution. Version sync actively replaces instances to match the configured percentage. "full_auto" ramps through fixed percentage targets after target-version health is observed. Response includes percentage, version_distribution, and health.summary.
		 */
		public \FoundryCo\Cloudflare\Enums\ApplicationsCreateApplicationRolloutStrategy $strategy,
		/** Properties required to modify a cloudchamber deployment specified by the user. */
		public ApplicationsCreateApplicationRolloutTargetConfiguration $targetConfiguration,
		/** Target application version after the rollout is complete and applied to all current instances. */
		public int $targetVersion,
		/**
		 * Current target version percentage (0-100). Only present for "new_instances" strategy.
		 */
		public ?int $percentage = null,
		/** Progress details of an application rollout. */
		public ?ApplicationsCreateApplicationRolloutProgress $progress = null,
		/** Timestamp when the rollout started. */
		public ?\DateTimeImmutable $startedAt = null,
		public ?array $steps = null,
		/**
		 * Version percentage distribution. Only present for "new_instances" strategy.
		 * For "rolling" strategy, see progress.version_distribution instead.
		 */
		public ?ApplicationsCreateApplicationRolloutVersionDistribution $versionDistribution = null,
	) {
	}
}
