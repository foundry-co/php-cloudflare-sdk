<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Steps defining the rollout process.
 */
readonly class CreateApplicationRolloutRequestStepsItem
{
	public function __construct(
		/** Description of the rollout step. */
		public ?string $description = null,
		public ?CreateApplicationRolloutRequestStepsItemStepSize $stepSize = null,
	) {
	}
}
