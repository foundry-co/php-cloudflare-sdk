<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DexEndpointsHttpTestDetailsHttpStatsByColoItemHttpStatusCodeItem
{
	public function __construct(
		public ?int $status200 = null,
		public ?int $status300 = null,
		public ?int $status400 = null,
		public ?int $status500 = null,
		public ?string $timestamp = null,
	) {
	}
}
