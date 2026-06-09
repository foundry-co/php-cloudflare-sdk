<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ApplicationsCreateApplicationRolloutHealth
{
	public function __construct(
		/** Shows a count of application instance states. */
		public ApplicationsCreateApplicationRolloutHealthInstances $instances,
		/**
		 * High-level health assessment. Only populated for "new_instances" strategy.
		 * Based on a sample of target-version instances (not a full count).
		 * - "pending": No target-version instances exist yet.
		 * - "healthy": All sampled target-version instances are running/active.
		 * - "degraded": Some sampled instances are still starting or scheduling.
		 * - "unhealthy": One or more sampled instances have failed.
		 */
		public ?\FoundryCo\Cloudflare\Enums\ApplicationsCreateApplicationRolloutHealthSummary $summary = null,
	) {
	}
}
