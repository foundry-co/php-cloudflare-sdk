<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class EmailSecuritySubmissions
{
	public function __construct(
		/** When the submission was requested (UTC). */
		public ?\DateTimeImmutable $requestedAt = null,
		public ?string $submissionId = null,
		public ?\FoundryCo\Cloudflare\Enums\EmailSecuritySubmissionsCustomerStatus $customerStatus = null,
		public mixed $escalatedAs = null,
		public ?\DateTimeImmutable $escalatedAt = null,
		public ?string $escalatedBy = null,
		public ?string $escalatedSubmissionId = null,
		public mixed $originalDisposition = null,
		public ?string $originalEdfHash = null,
		/** The postfix ID of the original message that was submitted */
		public ?string $originalPostfixId = null,
		public ?string $outcome = null,
		public mixed $outcomeDisposition = null,
		public ?string $requestedBy = null,
		public mixed $requestedDisposition = null,
		/** Deprecated, use `requested_at` instead */
		public ?string $requestedTs = null,
		public ?string $status = null,
		public ?string $subject = null,
		/** Whether the submission was created by a team member or an end user. */
		public ?\FoundryCo\Cloudflare\Enums\EmailSecuritySubmissionsType $type = null,
	) {
	}
}
