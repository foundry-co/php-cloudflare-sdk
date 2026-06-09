<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Response body for the GET show-unsubscribe-details endpoint. All fields are populated.
 */
readonly class NotificationPoliciesDetails
{
	public function __construct(
		/** The account id */
		public ?string $accountId = null,
		public ?string $email = null,
		/** The unique identifier of a notification policy */
		public ?string $id = null,
		/** Name of the policy. */
		public ?string $name = null,
		public ?string $token = null,
	) {
	}
}
