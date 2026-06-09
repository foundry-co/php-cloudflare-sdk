<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Move an instance to a different namespace.
 */
readonly class AiSearchMoveInstanceRequest
{
	public function __construct(
		/** Target namespace to move the instance into. */
		public string $newNamespace,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'new_namespace' => $this->newNamespace,
		], fn ($v) => $v !== null);
	}
}
