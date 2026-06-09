<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Net delta applied to feed indicators by this upload. Snapshot
 * uploads emit both *_added and *_removed; delta-add emits only
 * *_added; delta-remove emits only *_removed.
 */
readonly class CustomIndicatorFeedsMetadataLastUploadSummaryPersisted
{
	public function __construct(
		public ?int $domainsAdded = null,
		public ?int $domainsRemoved = null,
		public ?int $ipsAdded = null,
		public ?int $ipsRemoved = null,
		public ?int $urlsAdded = null,
		public ?int $urlsRemoved = null,
	) {
	}
}
