<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Accessibility tree node
 */
readonly class BrapiPostSnapshotAccessibilityTree
{
	public function __construct(
		public ?string $role = null,
		public ?string $autocomplete = null,
		public mixed $checked = null,
		public ?array $children = null,
		public ?string $description = null,
		public ?bool $disabled = null,
		public ?bool $expanded = null,
		public ?bool $focused = null,
		public ?string $haspopup = null,
		public ?string $invalid = null,
		public ?string $keyshortcuts = null,
		public ?float $level = null,
		public ?bool $modal = null,
		public ?bool $multiline = null,
		public ?bool $multiselectable = null,
		public ?string $name = null,
		public ?string $orientation = null,
		public mixed $pressed = null,
		public ?bool $readonly = null,
		public ?bool $required = null,
		public ?string $roledescription = null,
		public ?bool $selected = null,
		public mixed $value = null,
		public ?float $valuemax = null,
		public ?float $valuemin = null,
		public ?string $valuetext = null,
	) {
	}
}
