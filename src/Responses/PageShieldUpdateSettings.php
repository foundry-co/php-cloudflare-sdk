<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PageShieldUpdateSettings
{
	public function __construct(
		/** When true, indicates that Page Shield is enabled. */
		public ?bool $enabled = null,
		/** The timestamp of when Page Shield was last updated. */
		public ?string $updatedAt = null,
		/** When true, CSP reports will be sent to https://csp-reporting.cloudflare.com/cdn-cgi/script_monitor/report */
		public ?bool $useCloudflareReportingEndpoint = null,
		/** When true, the paths associated with connections URLs will also be analyzed. */
		public ?bool $useConnectionUrlPath = null,
	) {
	}
}
