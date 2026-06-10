<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Describes multiple deployments with parameters that describe how they should be placed
 */
readonly class ModifyApplication
{
	public function __construct(
		/** A unique identifier for the user's account */
		public ?string $accountId = null,
		/** Properties required to create a cloudchamber deployment specified by the user */
		public ?ModifyApplicationConfiguration $configuration = null,
		/** UTC timestamp string in ISO 8601 format */
		public ?string $createdAt = null,
		/** An Application ID represents an identifier of an application */
		public ?string $id = null,
		/** Number of deployments to create */
		public ?int $instances = null,
		/** The application name */
		public ?string $name = null,
		/** The scheduling policy to use for an application */
		public ?\FoundryCo\Cloudflare\Enums\ModifyApplicationSchedulingPolicy $schedulingPolicy = null,
		/** UTC timestamp string in ISO 8601 format */
		public ?string $updatedAt = null,
		public ?int $version = null,
		/** An identifier for a specific rollout within an application. */
		public ?string $activeRolloutId = null,
		public ?ModifyApplicationConstraints $constraints = null,
		/** Durable object configuration using a namespace ID */
		public ?ModifyApplicationDurableObjects $durableObjects = null,
		public ?ModifyApplicationHealth $health = null,
		/** Maximum number of instances that the application will allow. This is relevant for applications that auto-scale. */
		public ?int $maxInstances = null,
		/** Settings for application observability such as logging. */
		public ?ModifyApplicationObservability $observability = null,
		/**
		 * Grace period for active instances to stay alive before becoming eligible for shutdown signal due to a rollout, in seconds.
		 * Defaults to 0.
		 */
		public ?int $rolloutActiveGracePeriod = null,
	) {
	}
}
