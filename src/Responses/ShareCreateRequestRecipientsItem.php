<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Optionally specify `recipient_account_id` to target a specific account, or `organization_id` to target the caller's whole organization. If neither is provided, the caller's organization is used.
 * The legacy field `account_id` is accepted as a synonym for `recipient_account_id` during the deprecation period (see `x-sunset` on that field).
 */
readonly class ShareCreateRequestRecipientsItem
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
}
