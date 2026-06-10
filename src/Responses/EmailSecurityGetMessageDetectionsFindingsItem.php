<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class EmailSecurityGetMessageDetectionsFindingsItem
{
	public function __construct(
		public ?string $attachment = null,
		public ?string $detail = null,
		public ?\FoundryCo\Cloudflare\Enums\EmailSecurityGetMessageDetectionsFindingsItemDetection $detection = null,
		public ?string $field = null,
		public ?string $name = null,
		public ?string $portion = null,
		public ?string $reason = null,
		public ?float $score = null,
		public ?string $value = null,
	) {
	}
}
