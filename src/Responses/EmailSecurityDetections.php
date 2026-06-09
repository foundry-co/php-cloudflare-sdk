<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class EmailSecurityDetections
{
	public function __construct(
		public string $action,
		public array $attachments,
		public array $findings,
		public array $headers,
		public array $links,
		public EmailSecurityDetectionsSenderInfo $senderInfo,
		public array $threatCategories,
		public EmailSecurityDetectionsValidation $validation,
		public ?\FoundryCo\Cloudflare\Enums\EmailSecurityDetectionsFinalDisposition $finalDisposition = null,
	) {
	}
}
