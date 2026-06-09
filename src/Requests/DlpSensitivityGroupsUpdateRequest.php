<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update the attributes of a single sensitivity group.
 */
readonly class DlpSensitivityGroupsUpdateRequest
{
	public function __construct(
		public ?string $description = null,
		/**
		 * The desired final state of levels.
		 * - `None` (omitted): no level changes.
		 * - `Some([])`: delete all levels.
		 * - `Some([...])`: desired final set + order.
		 */
		public ?array $levels = null,
		public ?string $name = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'description' => $this->description,
		    'levels' => $this->levels,
		    'name' => $this->name,
		], fn ($v) => $v !== null);
	}
}
