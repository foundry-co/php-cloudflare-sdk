<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update applications review statuses
 */
readonly class ZeroTrustApplicationsReviewStatusUpdateRequest
{
	public function __construct(
		/** Contains the ids of the approved applications. */
		public array $approvedApps,
		/** Contains the ids of the applications in review. */
		public array $inReviewApps,
		/** Contains the ids of the unapproved applications. */
		public array $unapprovedApps,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'approved_apps' => $this->approvedApps,
		    'in_review_apps' => $this->inReviewApps,
		    'unapproved_apps' => $this->unapprovedApps,
		], fn ($v) => $v !== null);
	}
}
