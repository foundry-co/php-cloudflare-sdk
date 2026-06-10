<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Response body for the POST unsubscribe endpoint. name and token are not returned.
 */
readonly class NotificationPoliciesUnsubscribeEmailFromNotificationPolicy
{
	public function __construct(
		/** The account id */
		public ?string $accountId = null,
		public ?string $email = null,
		/** The unique identifier of a notification policy */
		public ?string $id = null,
	) {
	}
}
