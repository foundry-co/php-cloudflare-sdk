<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Counts of indicators that were uploaded but did not reach
 * QuickSilver, broken down by reason.
 */
readonly class CustomIndicatorFeedsGetIndicatorFeedMetadataLastUploadSummarySkipped
{
	public function __construct(
		/**
		 * Domains filtered by the global popularity allowlist at QS
		 * provisioning time. Popular domains (bing.com, naver.com,
		 * etc.) are protected from custom-threat-feed enforcement.
		 */
		public ?int $allowlistedDomains = null,
		/**
		 * Indicators in the upload whose valid_until is already in
		 * the past. These are not added to QS; the expiration cron
		 * handles cleanup.
		 */
		public ?int $expiredIndicators = null,
		/**
		 * Reserved for future use. Currently always 0 — the unifier
		 * aborts the entire upload on a single bad indicator.
		 */
		public ?int $invalidIndicators = null,
	) {
	}
}
