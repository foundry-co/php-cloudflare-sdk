<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Version percentage distribution. Only present for "new_instances" strategy.
 * For "rolling" strategy, see progress.version_distribution instead.
 */
readonly class CreateApplicationRolloutVersionDistribution
{
	public function __construct(
		/** Percentage of instances on the current (old) version. */
		public ?int $currentVersionPercentage = null,
		/** Percentage of instances on the target (new) version. */
		public ?int $targetVersionPercentage = null,
	) {
	}
}
