<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PostV4AccountsByAccountIdPipelinesV1ValidateSqlGraphEdgesItem
{
	public function __construct(
		public ?int $destId = null,
		public ?string $edgeType = null,
		public ?string $keyType = null,
		public ?int $srcId = null,
		public ?string $valueType = null,
	) {
	}
}
