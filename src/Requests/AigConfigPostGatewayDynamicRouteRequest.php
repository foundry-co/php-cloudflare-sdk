<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a new AI Gateway Dynamic Route.
 */
readonly class AigConfigPostGatewayDynamicRouteRequest
{
	public function __construct(
		public array $elements,
		public string $name,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'elements' => $this->elements,
		    'name' => $this->name,
		], fn ($v) => $v !== null);
	}
}
