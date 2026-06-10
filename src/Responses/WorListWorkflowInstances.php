<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorListWorkflowInstances
{
	public function __construct(
		public ?\DateTimeImmutable $createdOn = null,
		public ?\DateTimeImmutable $endedOn = null,
		public ?string $id = null,
		public ?\DateTimeImmutable $modifiedOn = null,
		public ?\DateTimeImmutable $startedOn = null,
		public ?\FoundryCo\Cloudflare\Enums\WorListWorkflowInstancesStatus $status = null,
		public ?string $versionId = null,
		public ?string $workflowId = null,
		public ?\FoundryCo\Cloudflare\Enums\WorListWorkflowInstancesTriggerSource $triggerSource = null,
	) {
	}
}
