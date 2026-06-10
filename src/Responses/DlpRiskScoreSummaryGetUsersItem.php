<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DlpRiskScoreSummaryGetUsersItem
{
	public function __construct(
		public ?string $email = null,
		public ?int $eventCount = null,
		public ?\DateTimeImmutable $lastEvent = null,
		public ?\FoundryCo\Cloudflare\Enums\DlpRiskScoreSummaryGetUsersItemMaxRiskLevel $maxRiskLevel = null,
		public ?string $name = null,
		public ?string $userId = null,
	) {
	}
}
