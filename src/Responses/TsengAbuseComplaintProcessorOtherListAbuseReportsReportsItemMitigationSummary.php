<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A summary of the mitigations related to this report.
 */
readonly class TsengAbuseComplaintProcessorOtherListAbuseReportsReportsItemMitigationSummary
{
	public function __construct(
		/** How many of the reported URLs were confirmed as abusive. */
		public int $acceptedUrlCount,
		/** How many mitigations are active. */
		public int $activeCount,
		/** Whether the report has been forwarded to an external hosting provider. */
		public bool $externalHostNotified,
		/** How many mitigations are under review. */
		public int $inReviewCount,
		/** How many mitigations are pending their effective date. */
		public int $pendingCount,
	) {
	}
}
