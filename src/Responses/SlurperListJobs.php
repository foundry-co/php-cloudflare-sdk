<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SlurperListJobs
{
	public function __construct(
		public ?string $createdAt = null,
		public ?string $finishedAt = null,
		public ?string $id = null,
		public ?bool $overwrite = null,
		public mixed $source = null,
		public ?\FoundryCo\Cloudflare\Enums\SlurperListJobsStatus $status = null,
		public ?SlurperListJobsTarget $target = null,
	) {
	}
}
