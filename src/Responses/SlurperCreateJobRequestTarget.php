<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SlurperCreateJobRequestTarget
{
	public function __construct(
		public string $bucket,
		public SlurperCreateJobRequestTargetSecret $secret,
		public \FoundryCo\Cloudflare\Enums\SlurperCreateJobRequestTargetVendor $vendor,
		public ?\FoundryCo\Cloudflare\Enums\SlurperCreateJobRequestTargetJurisdiction $jurisdiction = null,
	) {
	}
}
