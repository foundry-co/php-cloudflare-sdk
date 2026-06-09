<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkflowsInstances
{
	public function __construct(
		public \DateTimeImmutable $createdOn,
		public \DateTimeImmutable $endedOn,
		public string $id,
		public \DateTimeImmutable $modifiedOn,
		public \DateTimeImmutable $startedOn,
		public \FoundryCo\Cloudflare\Enums\WorkflowsInstancesStatus $status,
		public string $versionId,
		public string $workflowId,
		public ?\FoundryCo\Cloudflare\Enums\WorkflowsInstancesTriggerSource $triggerSource = null,
	) {
	}
}
