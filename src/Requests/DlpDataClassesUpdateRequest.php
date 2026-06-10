<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update the attributes of a single data class
 */
readonly class DlpDataClassesUpdateRequest
{
	public function __construct(
		public ?array $dataTags = null,
		public ?string $description = null,
		public ?string $expression = null,
		public ?string $name = null,
		public ?array $sensitivityLevels = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'data_tags' => $this->dataTags,
		    'description' => $this->description,
		    'expression' => $this->expression,
		    'name' => $this->name,
		    'sensitivity_levels' => $this->sensitivityLevels,
		], fn ($v) => $v !== null);
	}
}
