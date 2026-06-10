<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a new application
 */
readonly class CreateApplicationRequest
{
	public function __construct(
		/** Properties required to create a cloudchamber deployment specified by the user */
		public \FoundryCo\Cloudflare\Responses\CreateApplicationRequestConfiguration $configuration,
		/** Number of deployments to create */
		public int $instances,
		/** The name for this application */
		public string $name,
		/** The scheduling policy to use for an application */
		public \FoundryCo\Cloudflare\Enums\CreateApplicationRequestSchedulingPolicy $schedulingPolicy,
		public ?\FoundryCo\Cloudflare\Responses\CreateApplicationRequestConstraints $constraints = null,
		/** Set of properties to configure a durable object application in Cloudchamber. */
		public mixed $durableObjects = null,
		/** Maximum number of instances that the application will allow. This is relevant for applications that auto-scale. */
		public ?int $maxInstances = null,
		/** Settings for application observability such as logging. */
		public ?\FoundryCo\Cloudflare\Responses\CreateApplicationRequestObservability $observability = null,
		/**
		 * Grace period for active instances to stay alive before becoming eligible for shutdown signal due to a rollout, in seconds.
		 * Defaults to 0.
		 */
		public ?int $rolloutActiveGracePeriod = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'configuration' => $this->configuration->toArray(),
		    'instances' => $this->instances,
		    'name' => $this->name,
		    'scheduling_policy' => $this->schedulingPolicy->value,
		    'constraints' => $this->constraints?->toArray(),
		    'durable_objects' => $this->durableObjects,
		    'max_instances' => $this->maxInstances,
		    'observability' => $this->observability?->toArray(),
		    'rollout_active_grace_period' => $this->rolloutActiveGracePeriod,
		], fn ($v) => $v !== null);
	}
}
