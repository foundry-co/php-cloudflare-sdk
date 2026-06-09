<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AISearchInstancesStats
{
	public function __construct(
		public ?int $completed = null,
		/** True when status counts are unavailable (e.g. legacy stats query exceeded D1 statement-size limit). Counts are omitted in this case. */
		public ?bool $degraded = null,
		/** Engine-specific metadata. Present only for managed (v3) instances. */
		public ?AISearchInstancesStatsEngine $engine = null,
		public ?int $error = null,
		public ?array $fileEmbedErrors = null,
		public ?array $indexSourceErrors = null,
		public ?\DateTimeImmutable $lastActivity = null,
		public ?int $outdated = null,
		public ?int $queued = null,
		public ?int $running = null,
		public ?int $skipped = null,
	) {
	}
}
