<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class R2SuperSlurperLogs
{
	public function __construct(
		public ?string $createdAt = null,
		public ?string $job = null,
		public ?\FoundryCo\Cloudflare\Enums\R2SuperSlurperLogsLogType $logType = null,
		public ?string $message = null,
		public ?string $objectKey = null,
	) {
	}
}
