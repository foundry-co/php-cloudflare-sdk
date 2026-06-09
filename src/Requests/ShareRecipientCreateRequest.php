<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a new share recipient
 */
readonly class ShareRecipientCreateRequest
{
	public function __construct(
		/**
		 * Deprecated alias for `recipient_account_id`. Use `recipient_account_id` instead.
		 * The body field collided with the URL path parameter of the same name, which prevented SDK generators from distinguishing the source account (in the URL) from the recipient account (in the body). Both names will continue to be accepted until 2027-05-26 (see `x-sunset`).
		 */
		public mixed $accountId = null,
		/** Organization identifier. */
		public ?string $organizationId = null,
		/** The account that will receive the share. */
		public mixed $recipientAccountId = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'account_id' => $this->accountId,
		    'organization_id' => $this->organizationId,
		    'recipient_account_id' => $this->recipientAccountId,
		], fn ($v) => $v !== null);
	}
}
