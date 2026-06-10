<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DlpRiskScoreSummaryGetForUser
{
	public function __construct(
		public ?string $email = null,
		public ?array $events = null,
		public ?string $name = null,
		public ?\DateTimeImmutable $lastResetTime = null,
		public mixed $riskLevel = null,
	) {
	}
}
