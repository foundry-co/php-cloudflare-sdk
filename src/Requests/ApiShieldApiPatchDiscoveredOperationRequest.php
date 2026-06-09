<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Patch discovered operation
 */
readonly class ApiShieldApiPatchDiscoveredOperationRequest
{
	public function __construct(
		public mixed $state = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'state' => $this->state,
		], fn ($v) => $v !== null);
	}
}
