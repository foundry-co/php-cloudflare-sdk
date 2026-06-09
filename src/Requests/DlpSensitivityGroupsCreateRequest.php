<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Creates a new sensitivity group.
 */
readonly class DlpSensitivityGroupsCreateRequest
{
	public function __construct(
		public string $name,
		public ?string $description = null,
		/** Levels to create with the group. Mutually exclusive with `template_id`. */
		public ?array $levels = null,
		public ?string $templateId = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'description' => $this->description,
		    'levels' => $this->levels,
		    'template_id' => $this->templateId,
		], fn ($v) => $v !== null);
	}
}
