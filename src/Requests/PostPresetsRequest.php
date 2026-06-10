<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a preset
 */
readonly class PostPresetsRequest
{
	public function __construct(
		public \FoundryCo\Cloudflare\Responses\PostPresetsRequestConfig $config,
		/** Name of the preset */
		public string $name,
		public \FoundryCo\Cloudflare\Responses\PostPresetsRequestPermissions $permissions,
		public \FoundryCo\Cloudflare\Responses\PostPresetsRequestUi $ui,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'config' => $this->config->toArray(),
		    'name' => $this->name,
		    'permissions' => $this->permissions->toArray(),
		    'ui' => $this->ui->toArray(),
		], fn ($v) => $v !== null);
	}
}
