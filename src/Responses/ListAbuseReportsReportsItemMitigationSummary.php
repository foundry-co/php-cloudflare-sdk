<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A summary of the mitigations related to this report.
 */
readonly class ListAbuseReportsReportsItemMitigationSummary
{
	public function __construct(
		/** How many of the reported URLs were confirmed as abusive. */
		public ?int $acceptedUrlCount = null,
		/** How many mitigations are active. */
		public ?int $activeCount = null,
		/** Whether the report has been forwarded to an external hosting provider. */
		public ?bool $externalHostNotified = null,
		/** How many mitigations are under review. */
		public ?int $inReviewCount = null,
		/** How many mitigations are pending their effective date. */
		public ?int $pendingCount = null,
	) {
	}
}
