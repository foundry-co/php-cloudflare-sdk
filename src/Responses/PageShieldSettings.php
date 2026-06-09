<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PageShieldSettings
{
	public function __construct(
		/** When true, indicates that Page Shield is enabled. */
		public bool $enabled,
		/** The timestamp of when Page Shield was last updated. */
		public string $updatedAt,
		/** When true, CSP reports will be sent to https://csp-reporting.cloudflare.com/cdn-cgi/script_monitor/report */
		public bool $useCloudflareReportingEndpoint,
		/** When true, the paths associated with connections URLs will also be analyzed. */
		public bool $useConnectionUrlPath,
	) {
	}
}
