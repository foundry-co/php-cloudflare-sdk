<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Settings for application observability such as logging.
 */
readonly class ModifyApplicationRequestObservability
{
	public function __construct(
		/** Observability logging settings. */
		public ?ModifyApplicationRequestObservabilityLogs $logs = null,
		/**
		 * Fixed number of instances that should receive the application-level observability overlay.
		 * Mutually exclusive with `target_instance_percentage`.
		 */
		public ?int $targetInstanceCount = null,
		/**
		 * Percentage of instances that should receive the application-level observability overlay.
		 * This rounds up so at least this percentage of instances is targeted.
		 * Mutually exclusive with `target_instance_count`.
		 */
		public ?int $targetInstancePercentage = null,
	) {
	}
}
