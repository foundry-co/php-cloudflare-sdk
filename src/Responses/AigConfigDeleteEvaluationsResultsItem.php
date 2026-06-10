<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AigConfigDeleteEvaluationsResultsItem
{
	public function __construct(
		public ?\DateTimeImmutable $createdAt = null,
		public ?string $evaluationId = null,
		public ?string $evaluationTypeId = null,
		public ?string $id = null,
		public ?\DateTimeImmutable $modifiedAt = null,
		public ?string $result = null,
		public ?float $status = null,
		public ?string $statusDescription = null,
		public ?float $totalLogs = null,
	) {
	}
}
