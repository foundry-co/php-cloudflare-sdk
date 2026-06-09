<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZeroTrustListsCsvData
{
	public function __construct(
		/** Provide the list description. */
		public ?string $description = null,
		/** Specify the list type. */
		public ?\FoundryCo\Cloudflare\Enums\ZeroTrustListsCsvDataListType $listType = null,
		/** Specify the list name. */
		public ?string $name = null,
	) {
	}
}
