<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class GetSecurityCenterZoneScans
{
	public function __construct(
		/** Quota information for on-demand scans. Scans are rate limited per account per 24-hour rolling window. */
		public ?GetSecurityCenterZoneScansQuota $quota = null,
		/** List of on-demand scans. */
		public ?array $scans = null,
	) {
	}
}
