<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a new rollout for an application
 */
readonly class CreateApplicationRolloutRequest
{
	public function __construct(
		/** Description of the rollout process. */
		public string $description,
		/**
		 * Strategy used for the rollout.
		 * - "rolling": Step-based rollout with health gates. Actively replaces instances to reach each step's target percentage.
		 * - "new_instances": Percentage control over version distribution. Version sync actively replaces instances to match the configured percentage. The "full_auto" kind advances through fixed percentage targets after target-version health is observed.
		 */
		public \FoundryCo\Cloudflare\Enums\CreateApplicationRolloutRequestStrategy $strategy,
		/** Properties required to modify a cloudchamber deployment specified by the user. */
		public \FoundryCo\Cloudflare\Responses\CreateApplicationRolloutRequestTargetConfiguration $targetConfiguration,
		/**
		 * Kind of the rollout process.
		 *  - "full_auto": For rolling rollouts, starts progressing steps upon rollout creation. For new_instances rollouts, advances percentage targets automatically after target-version health is observed.
		 *  - "full_manual": Requires manually progressing each step in the rollout using the UpdateRollout's action paramater.
		 * For "new_instances" strategy, omit "kind" to preserve manual percentage behavior, or set "full_auto" to start an automatic 10% health-gated ramp.
		 */
		public ?\FoundryCo\Cloudflare\Enums\CreateApplicationRolloutRequestKind $kind = null,
		/**
		 * Initial target version percentage (0-100). Version sync will actively replace instances to match.
		 * Required when strategy is "new_instances" and kind is "full_manual". When strategy is "new_instances" and kind is "full_auto", omitted percentage starts at 10% or the smallest percentage that targets at least one instance. Not used for "rolling".
		 */
		public ?int $percentage = null,
		/**
		 * Percentage of rollout to increase in each step when "steps" is not specificed. Applicable values are 5, 10, 20, 25, 50, 100.
		 * These create rollouts with 20, 10, 5, 4, 2, 1 steps respectively.
		 * Only valid for "rolling" strategy.
		 */
		public ?\FoundryCo\Cloudflare\Enums\CreateApplicationRolloutRequestStepPercentage $stepPercentage = null,
		/**
		 * Steps defining the rollout process, when "step_percentage" is not defined.
		 * Only one of "step_percentage" or "steps" can be defined when creating a rollout.
		 * "steps" allow granular control over each step.
		 * Only valid for "rolling" strategy.
		 */
		public ?array $steps = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'description' => $this->description,
		    'strategy' => $this->strategy->value,
		    'target_configuration' => $this->targetConfiguration->toArray(),
		    'kind' => $this->kind?->value,
		    'percentage' => $this->percentage,
		    'step_percentage' => $this->stepPercentage?->value,
		    'steps' => $this->steps,
		], fn ($v) => $v !== null);
	}
}
