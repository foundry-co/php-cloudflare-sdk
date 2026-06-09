<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a new Dataset
 */
readonly class AigConfigCreateDatasetRequest
{
	public function __construct(
		public bool $enable,
		public array $filters,
		public string $name,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'enable' => $this->enable,
		    'filters' => $this->filters,
		    'name' => $this->name,
		], fn ($v) => $v !== null);
	}
}
