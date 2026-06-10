<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class GetApplicationConstraints
{
	public function __construct(
		/** Currently only "eu" and "fedramp" are supported. Overlap between jurisdiction and region is allowed for ENAM, WNAM (FedRAMP) and EEUR, WEUR (EU). */
		public ?string $jurisdiction = null,
		public ?array $regions = null,
	) {
	}
}
