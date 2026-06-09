<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Quota information for on-demand scans. Scans are rate limited per account per 24-hour rolling window.
 */
readonly class SecurityCenterScansScansQuota
{
	public function __construct(
		/** The number of on-demand scans remaining in the current 24-hour window. */
		public int $available,
		/** The number of on-demand scans initiated in the current 24-hour window. */
		public int $used,
	) {
	}
}
