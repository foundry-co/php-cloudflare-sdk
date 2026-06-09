<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update Membership
 */
readonly class UserSAccountMembershipsUpdateMembershipRequest
{
	public function __construct(
		/** Whether to accept or reject this account invitation. */
		public \FoundryCo\Cloudflare\Enums\UserSAccountMembershipsUpdateMembershipRequestStatus $status,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'status' => $this->status->value,
		], fn ($v) => $v !== null);
	}
}
