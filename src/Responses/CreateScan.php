<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CreateScan
{
	public function __construct(
		/** Scan identifier. */
		public ?string $id = null,
		/** The type of vulnerability scan. */
		public ?\FoundryCo\Cloudflare\Enums\CreateScanScanType $scanType = null,
		/** Current lifecycle status of the scan. */
		public ?\FoundryCo\Cloudflare\Enums\CreateScanStatus $status = null,
		/** The target environment this scan runs against. */
		public ?string $targetEnvironmentId = null,
		/** Vulnerability report produced after the scan completes. The shape depends on the scan type. Present only for finished scans. */
		public ?CreateScanReport $report = null,
	) {
	}
}
