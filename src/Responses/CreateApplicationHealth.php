<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CreateApplicationHealth
{
	public function __construct(
		/** Shows a count of application instance states. */
		public ?CreateApplicationHealthInstances $instances = null,
		/**
		 * High-level health assessment. Only populated for "new_instances" strategy.
		 * Based on a sample of target-version instances (not a full count).
		 * - "pending": No target-version instances exist yet.
		 * - "healthy": All sampled target-version instances are running/active.
		 * - "degraded": Some sampled instances are still starting or scheduling.
		 * - "unhealthy": One or more sampled instances have failed.
		 */
		public ?\FoundryCo\Cloudflare\Enums\CreateApplicationHealthSummary $summary = null,
	) {
	}
}
