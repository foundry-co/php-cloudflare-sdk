<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Modify an application
 */
readonly class ModifyApplicationRequest
{
	public function __construct(
		/** Properties required to modify a cloudchamber deployment specified by the user. */
		public ?\FoundryCo\Cloudflare\Responses\ModifyApplicationRequestConfiguration $configuration = null,
		public ?\FoundryCo\Cloudflare\Responses\ModifyApplicationRequestConstraints $constraints = null,
		/** Number of deployments to maintain within this application. This can be used to scale the application up/down. */
		public ?int $instances = null,
		/**
		 * Maximum number of instances that the application will allow. This is relevant for applications that auto-scale.
		 * It will reduce the number of running instances if there are more than `max_instances`.
		 */
		public ?int $maxInstances = null,
		/** The name for this application */
		public ?string $name = null,
		/** Settings for application observability such as logging. */
		public ?\FoundryCo\Cloudflare\Responses\ModifyApplicationRequestObservability $observability = null,
		/**
		 * Grace period for active instances to stay alive before becoming eligible for shutdown signal due to a rollout, in seconds.
		 * Defaults to 0.
		 */
		public ?int $rolloutActiveGracePeriod = null,
		/** The scheduling policy to use for an application */
		public ?\FoundryCo\Cloudflare\Enums\ModifyApplicationRequestSchedulingPolicy $schedulingPolicy = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'configuration' => $this->configuration?->toArray(),
		    'constraints' => $this->constraints?->toArray(),
		    'instances' => $this->instances,
		    'max_instances' => $this->maxInstances,
		    'name' => $this->name,
		    'observability' => $this->observability?->toArray(),
		    'rollout_active_grace_period' => $this->rolloutActiveGracePeriod,
		    'scheduling_policy' => $this->schedulingPolicy?->value,
		], fn ($v) => $v !== null);
	}
}
