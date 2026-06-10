<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a preset
 */
readonly class PatchPresetsPresetIdRequest
{
	public function __construct(
		public ?\FoundryCo\Cloudflare\Responses\PatchPresetsPresetIdRequestConfig $config = null,
		/** Name of the preset */
		public ?string $name = null,
		public ?\FoundryCo\Cloudflare\Responses\PatchPresetsPresetIdRequestPermissions $permissions = null,
		public ?\FoundryCo\Cloudflare\Responses\PatchPresetsPresetIdRequestUi $ui = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'config' => $this->config?->toArray(),
		    'name' => $this->name,
		    'permissions' => $this->permissions?->toArray(),
		    'ui' => $this->ui?->toArray(),
		], fn ($v) => $v !== null);
	}
}
