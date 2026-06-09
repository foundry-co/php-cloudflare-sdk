<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Steps within the rollout process.
 */
readonly class ApplicationsCreateApplicationRolloutStepsItem
{
	public function __construct(
		/** Description of the rollout step. */
		public string $description,
		/** The sequential order of the rollout step, automatically assigned starting from 1, based on the total number of steps in the rollout process. */
		public int $id,
		/** Status of the rollout step. */
		public \FoundryCo\Cloudflare\Enums\ApplicationsCreateApplicationRolloutStepsItemStatus $status,
		public ApplicationsCreateApplicationRolloutStepsItemStepSize $stepSize,
		/** UTC timestamp string in ISO 8601 format */
		public ?string $completedAt = null,
		/** Reason why the step has the current status */
		public ?string $reason = null,
		/** UTC timestamp string in ISO 8601 format */
		public ?string $startedAt = null,
	) {
	}
}
