<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Describes multiple deployments with parameters that describe how they should be placed
 */
readonly class ApplicationsGetApplication
{
	public function __construct(
		/** A unique identifier for the user's account */
		public string $accountId,
		/** Properties required to create a cloudchamber deployment specified by the user */
		public ApplicationsGetApplicationConfiguration $configuration,
		/** UTC timestamp string in ISO 8601 format */
		public string $createdAt,
		/** An Application ID represents an identifier of an application */
		public string $id,
		/** Number of deployments to create */
		public int $instances,
		/** The application name */
		public string $name,
		/** The scheduling policy to use for an application */
		public \FoundryCo\Cloudflare\Enums\ApplicationsGetApplicationSchedulingPolicy $schedulingPolicy,
		/** UTC timestamp string in ISO 8601 format */
		public string $updatedAt,
		public int $version,
		/** An identifier for a specific rollout within an application. */
		public ?string $activeRolloutId = null,
		public ?ApplicationsGetApplicationConstraints $constraints = null,
		/** Durable object configuration using a namespace ID */
		public ?ApplicationsGetApplicationDurableObjects $durableObjects = null,
		public ?ApplicationsGetApplicationHealth $health = null,
		/** Maximum number of instances that the application will allow. This is relevant for applications that auto-scale. */
		public ?int $maxInstances = null,
		/** Settings for application observability such as logging. */
		public ?ApplicationsGetApplicationObservability $observability = null,
		/**
		 * Grace period for active instances to stay alive before becoming eligible for shutdown signal due to a rollout, in seconds.
		 * Defaults to 0.
		 */
		public ?int $rolloutActiveGracePeriod = null,
	) {
	}
}
