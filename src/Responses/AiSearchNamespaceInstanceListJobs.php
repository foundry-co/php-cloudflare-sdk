<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AiSearchNamespaceInstanceListJobs
{
	public function __construct(
		public ?string $id = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchNamespaceInstanceListJobsSource $source = null,
		public ?string $description = null,
		public ?string $endReason = null,
		public ?string $endedAt = null,
		public ?string $lastSeenAt = null,
		public ?string $startedAt = null,
	) {
	}
}
