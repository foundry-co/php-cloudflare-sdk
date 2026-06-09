<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class NotificationHistoryHistory
{
	public function __construct(
		/** Message body included in the notification sent. */
		public ?string $alertBody = null,
		/** Type of notification that has been dispatched. */
		public ?string $alertType = null,
		/** Description of the notification policy (if present). */
		public ?string $description = null,
		/** UUID */
		public ?string $id = null,
		/** The mechanism to which the notification has been dispatched. */
		public ?string $mechanism = null,
		/** The type of mechanism to which the notification has been dispatched. This can be email/pagerduty/webhook based on the mechanism configured. */
		public ?\FoundryCo\Cloudflare\Enums\NotificationHistoryHistoryMechanismType $mechanismType = null,
		/** Name of the policy. */
		public ?string $name = null,
		/** The unique identifier of a notification policy */
		public ?string $policyId = null,
		/** Timestamp of when the notification was dispatched in ISO 8601 format. */
		public ?\DateTimeImmutable $sent = null,
	) {
	}
}
