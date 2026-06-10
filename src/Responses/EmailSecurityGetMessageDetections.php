<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class EmailSecurityGetMessageDetections
{
	public function __construct(
		public ?string $action = null,
		public ?array $attachments = null,
		public ?array $findings = null,
		public ?array $headers = null,
		public ?array $links = null,
		public ?EmailSecurityGetMessageDetectionsSenderInfo $senderInfo = null,
		public ?array $threatCategories = null,
		public ?EmailSecurityGetMessageDetectionsValidation $validation = null,
		public ?\FoundryCo\Cloudflare\Enums\EmailSecurityGetMessageDetectionsFinalDisposition $finalDisposition = null,
	) {
	}
}
