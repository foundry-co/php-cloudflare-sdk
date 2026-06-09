<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZeroTrustApplicationsReviewStatusUpdate
{
	public function __construct(
		/** Contains the ids of the approved applications. */
		public ?array $approvedApps = null,
		public ?\DateTimeImmutable $createdAt = null,
		/** Contains the ids of the applications in review. */
		public ?array $inReviewApps = null,
		/** Contains the ids of the unapproved applications. */
		public ?array $unapprovedApps = null,
		public ?\DateTimeImmutable $updatedAt = null,
	) {
	}
}
