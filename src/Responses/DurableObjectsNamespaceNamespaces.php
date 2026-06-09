<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DurableObjectsNamespaceNamespaces
{
	public function __construct(
		public ?string $class = null,
		public ?string $id = null,
		public ?string $name = null,
		public ?string $script = null,
		public ?bool $useSqlite = null,
	) {
	}
}
