<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class GetSecurityCenterZoneScansScansItem
{
	public function __construct(
		/** An opaque identifier for the scan. */
		public ?string $scanId = null,
		/** The time at which the scan was started, in RFC 3339 format. */
		public ?\DateTimeImmutable $startedAt = null,
		/** The current status of the scan. */
		public ?\FoundryCo\Cloudflare\Enums\GetSecurityCenterZoneScansScansItemStatus $status = null,
	) {
	}
}
