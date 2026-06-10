<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DlpEmailScannerUpdateRule
{
	public function __construct(
		public mixed $action = null,
		/** Triggered if all conditions match. */
		public ?array $conditions = null,
		public ?\DateTimeImmutable $createdAt = null,
		public ?bool $enabled = null,
		public ?string $name = null,
		public ?int $priority = null,
		public ?string $ruleId = null,
		public ?\DateTimeImmutable $updatedAt = null,
		public ?string $description = null,
	) {
	}
}
