<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CreateScanReport
{
	public function __construct(
		public ?CreateScanReportReport $report = null,
		/** Version of the report schema. */
		public ?\FoundryCo\Cloudflare\Enums\CreateScanReportReportSchemaVersion $reportSchemaVersion = null,
	) {
	}
}
