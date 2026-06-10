<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Log performance metrics, including averages and per-endpoint details.
 */
readonly class RadarGetCertificateLogDetailsCertificateLogPerformance
{
	public function __construct(
		public ?array $endpoints = null,
		public ?float $responseTime = null,
		public ?float $uptime = null,
	) {
	}
}
