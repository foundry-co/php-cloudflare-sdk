<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Delete Many Routes
 */
readonly class MagicStaticRoutesDeleteManyRoutesRequest
{
	public function __construct(
		public array $routes,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'routes' => $this->routes,
		], fn ($v) => $v !== null);
	}
}
