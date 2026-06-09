<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CustomIndicatorFeedsMetadata
{
	public function __construct(
		/** The date and time when the data entry was created */
		public ?\DateTimeImmutable $createdOn = null,
		/** The description of the example test */
		public ?string $description = null,
		/** The unique identifier for the indicator feed */
		public ?int $id = null,
		/** Whether the indicator feed can be attributed to a provider */
		public ?bool $isAttributable = null,
		/** Whether the indicator feed can be downloaded */
		public ?bool $isDownloadable = null,
		/** Whether the indicator feed is exposed to customers */
		public ?bool $isPublic = null,
		/**
		 * Summary of indicator counts from the last successful upload to this
		 * feed. Populated by the custom-threat-feeds loader at the end of each
		 * successful load. Absent (omitted) when no upload has completed
		 * successfully or the upload errored before the summary write.
		 * Surfaces silent-failure paths so operators can see when their
		 * indicators were dropped (popularity allowlist, expired valid_until,
		 * etc.) without reading loader logs.
		 */
		public ?CustomIndicatorFeedsMetadataLastUploadSummary $lastUploadSummary = null,
		/**
		 * Human-readable error message describing why the latest upload
		 * failed. Populated only when `latest_upload_status` is `Error`.
		 * Returns one of a small fixed set of category-level messages
		 * (invalid domain / IP / URL entries, malformed row or header,
		 * invalid valid_until timestamp, etc.) or the generic
		 * `Upload failed` for unknown or infrastructure-level errors.
		 * Never echoes raw error text from the underlying loader.
		 * Intel accounts receive the verbatim loader/API error text
		 * (including specific offending values) instead of these
		 * category-level messages.
		 */
		public ?string $latestUploadError = null,
		/** Status of the latest snapshot uploaded */
		public ?\FoundryCo\Cloudflare\Enums\CustomIndicatorFeedsMetadataLatestUploadStatus $latestUploadStatus = null,
		/** The date and time when the data entry was last modified */
		public ?\DateTimeImmutable $modifiedOn = null,
		/** The name of the indicator feed */
		public ?string $name = null,
		/** The unique identifier for the provider */
		public ?int $providerId = null,
		/** The provider of the indicator feed */
		public ?string $providerName = null,
	) {
	}
}
