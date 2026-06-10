<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorListWorkflows
{
	public function __construct(
		public ?string $className = null,
		public ?\DateTimeImmutable $createdOn = null,
		public ?string $id = null,
		public ?WorListWorkflowsInstances $instances = null,
		public ?\DateTimeImmutable $modifiedOn = null,
		public ?string $name = null,
		public ?string $scriptName = null,
		public ?\DateTimeImmutable $triggeredOn = null,
		public ?array $schedules = null,
	) {
	}
}
