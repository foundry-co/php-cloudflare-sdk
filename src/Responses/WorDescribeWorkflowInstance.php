<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorDescribeWorkflowInstance
{
	public function __construct(
		public ?\DateTimeImmutable $end = null,
		public ?WorDescribeWorkflowInstanceError $error = null,
		public mixed $output = null,
		public ?array $params = null,
		public ?\DateTimeImmutable $queued = null,
		public ?WorDescribeWorkflowInstanceRollback $rollback = null,
		public ?\DateTimeImmutable $start = null,
		public ?\FoundryCo\Cloudflare\Enums\WorDescribeWorkflowInstanceStatus $status = null,
		public ?int $stepCount = null,
		public ?array $steps = null,
		public ?WorDescribeWorkflowInstanceTrigger $trigger = null,
		public ?string $versionId = null,
		public ?WorDescribeWorkflowInstanceSchedule $schedule = null,
	) {
	}
}
