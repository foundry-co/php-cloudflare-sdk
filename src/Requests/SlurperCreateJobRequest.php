<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a job
 */
readonly class SlurperCreateJobRequest
{
	public function __construct(
		public ?bool $overwrite = null,
		public mixed $source = null,
		public ?\FoundryCo\Cloudflare\Responses\SlurperCreateJobRequestTarget $target = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'overwrite' => $this->overwrite,
		    'source' => $this->source,
		    'target' => $this->target?->toArray(),
		], fn ($v) => $v !== null);
	}
}
