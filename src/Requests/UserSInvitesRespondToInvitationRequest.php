<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Respond to Invitation
 */
readonly class UserSInvitesRespondToInvitationRequest
{
	public function __construct(
		/** Status of your response to the invitation (rejected or accepted). */
		public \FoundryCo\Cloudflare\Enums\UserSInvitesRespondToInvitationRequestStatus $status,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'status' => $this->status->value,
		], fn ($v) => $v !== null);
	}
}
