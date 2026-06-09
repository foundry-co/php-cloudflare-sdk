<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update Page Shield settings
 */
readonly class PageShieldUpdateSettingsRequest
{
	public function __construct(
		/** When true, indicates that Page Shield is enabled. */
		public ?bool $enabled = null,
		/** When true, CSP reports will be sent to https://csp-reporting.cloudflare.com/cdn-cgi/script_monitor/report */
		public ?bool $useCloudflareReportingEndpoint = null,
		/** When true, the paths associated with connections URLs will also be analyzed. */
		public ?bool $useConnectionUrlPath = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'enabled' => $this->enabled,
		    'use_cloudflare_reporting_endpoint' => $this->useCloudflareReportingEndpoint,
		    'use_connection_url_path' => $this->useConnectionUrlPath,
		], fn ($v) => $v !== null);
	}
}
