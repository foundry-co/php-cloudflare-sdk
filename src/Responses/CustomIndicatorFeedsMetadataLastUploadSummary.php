<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Summary of indicator counts from the last successful upload to this
 * feed. Populated by the custom-threat-feeds loader at the end of each
 * successful load. Absent (omitted) when no upload has completed
 * successfully or the upload errored before the summary write.
 * Surfaces silent-failure paths so operators can see when their
 * indicators were dropped (popularity allowlist, expired valid_until,
 * etc.) without reading loader logs.
 */
readonly class CustomIndicatorFeedsMetadataLastUploadSummary
{
	public function __construct(
		/**
		 * Net delta applied to feed indicators by this upload. Snapshot
		 * uploads emit both *_added and *_removed; delta-add emits only
		 * *_added; delta-remove emits only *_removed.
		 */
		public ?CustomIndicatorFeedsMetadataLastUploadSummaryPersisted $persisted = null,
		/**
		 * Counts of indicators that were uploaded but did not reach
		 * QuickSilver, broken down by reason.
		 */
		public ?CustomIndicatorFeedsMetadataLastUploadSummarySkipped $skipped = null,
		/** Indicator counts from the unified file the loader received */
		public ?CustomIndicatorFeedsMetadataLastUploadSummaryUploaded $uploaded = null,
	) {
	}
}
