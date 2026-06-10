<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Creates a new data class
 */
readonly class DlpDataClassesCreateRequest
{
	public function __construct(
		public array $dataTags,
		public string $expression,
		public string $name,
		public array $sensitivityLevels,
		public ?string $description = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'data_tags' => $this->dataTags,
		    'expression' => $this->expression,
		    'name' => $this->name,
		    'sensitivity_levels' => $this->sensitivityLevels,
		    'description' => $this->description,
		], fn ($v) => $v !== null);
	}
}
