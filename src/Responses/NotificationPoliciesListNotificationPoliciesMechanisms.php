<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * List of IDs that will be used when dispatching a notification. IDs for email type will be the email address.
 */
readonly class NotificationPoliciesListNotificationPoliciesMechanisms
{
	public function __construct(
		public ?array $email = null,
		public ?array $pagerduty = null,
		public ?array $webhooks = null,
	) {
	}
}
