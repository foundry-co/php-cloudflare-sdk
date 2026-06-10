<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetEmailSecurityTimeseriesGroupByThreatCategorySerie0
{
	public function __construct(
		public ?array $brandImpersonation = null,
		public ?array $credentialHarvester = null,
		public ?array $identityDeception = null,
		public ?array $link = null,
	) {
	}
}
