<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A group of email addresses that can approve a temporary authentication request.
 */
readonly class AccessPoliciesUpdateAnAccessPolicyApprovalGroupsItem
{
	public function __construct(
		/** The number of approvals needed to obtain access. */
		public ?float $approvalsNeeded = null,
		/** A list of emails that can approve the access request. */
		public ?array $emailAddresses = null,
		/** The UUID of an re-usable email list. */
		public ?string $emailListUuid = null,
	) {
	}
}
