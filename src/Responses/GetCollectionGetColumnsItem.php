<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class GetCollectionGetColumnsItem
{
	public function __construct(
		public ?string $id = null,
		public ?string $name = null,
		public ?float $position = null,
		public ?bool $required = null,
		public ?string $type = null,
		public ?array $default = null,
	) {
	}
}
