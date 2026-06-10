<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update column
 */
readonly class PatchColumnUpdateRequest
{
	public function __construct(
		/** New column name (must be unique) */
		public ?string $name = null,
		/** Column display order */
		public ?float $position = null,
		/** Whether column is required */
		public ?bool $required = null,
		/** Column type: text, number, boolean, or date */
		public ?\FoundryCo\Cloudflare\Enums\PatchColumnUpdateRequestType $type = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'position' => $this->position,
		    'required' => $this->required,
		    'type' => $this->type?->value,
		], fn ($v) => $v !== null);
	}
}
