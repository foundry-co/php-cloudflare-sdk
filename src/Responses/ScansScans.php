<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ScansScans
{
	public function __construct(
		/** Scan identifier. */
		public string $id,
		/** The type of vulnerability scan. */
		public \FoundryCo\Cloudflare\Enums\ScansScansScanType $scanType,
		/** Current lifecycle status of the scan. */
		public \FoundryCo\Cloudflare\Enums\ScansScansStatus $status,
		/** The target environment this scan runs against. */
		public string $targetEnvironmentId,
		/** Vulnerability report produced after the scan completes. The shape depends on the scan type. Present only for finished scans. */
		public ?ScansScansReport $report = null,
	) {
	}
}
