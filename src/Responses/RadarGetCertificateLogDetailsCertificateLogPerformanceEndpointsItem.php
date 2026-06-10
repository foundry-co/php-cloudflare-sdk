<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetCertificateLogDetailsCertificateLogPerformanceEndpointsItem
{
	public function __construct(
		/** The certificate log endpoint names used in performance metrics. */
		public ?\FoundryCo\Cloudflare\Enums\RadarGetCertificateLogDetailsCertificateLogPerformanceEndpointsItemEndpoint $endpoint = null,
		public ?float $responseTime = null,
		public ?float $uptime = null,
	) {
	}
}
