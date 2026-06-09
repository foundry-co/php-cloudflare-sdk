<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class R2SuperSlurperJobs
{
	public function __construct(
		public ?string $createdAt = null,
		public ?string $finishedAt = null,
		public ?string $id = null,
		public ?bool $overwrite = null,
		public mixed $source = null,
		public ?\FoundryCo\Cloudflare\Enums\R2SuperSlurperJobsStatus $status = null,
		public ?R2SuperSlurperJobsTarget $target = null,
	) {
	}
}
