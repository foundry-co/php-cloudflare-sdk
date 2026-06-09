<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Lifecycle configuration for a deployment.
 */
readonly class ModifyApplicationRequestConfigurationLifecycle
{
	public function __construct(
		/**
		 * Duration string. From Go documentation:
		 *   A string representing the duration in the form "3d1h3m". Leading zero units are omitted.
		 *   As a special case, durations less than one second format use a smaller unit (milli-, micro-, or nanoseconds)
		 *   to ensure that the leading digit is non-zero.
		 */
		public ?string $maxTerminationDuration = null,
	) {
	}
}
