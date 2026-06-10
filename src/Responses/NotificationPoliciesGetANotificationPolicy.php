<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class NotificationPoliciesGetANotificationPolicy
{
	public function __construct(
		/** Optional specification of how often to re-alert from the same incident, not support on all alert types. */
		public ?string $alertInterval = null,
		/** Refers to which event will trigger a Notification dispatch. You can use the endpoint to get available alert types which then will give you a list of possible values. */
		public ?\FoundryCo\Cloudflare\Enums\NotificationPoliciesGetANotificationPolicyAlertType $alertType = null,
		public ?\DateTimeImmutable $created = null,
		/** Optional description for the Notification policy. */
		public ?string $description = null,
		/** Whether or not the Notification policy is enabled. */
		public ?bool $enabled = null,
		/** Optional filters that allow you to be alerted only on a subset of events for that alert type based on some criteria. This is only available for select alert types. See alert type documentation for more details. */
		public ?NotificationPoliciesGetANotificationPolicyFilters $filters = null,
		/** The unique identifier of a notification policy */
		public ?string $id = null,
		/** List of IDs that will be used when dispatching a notification. IDs for email type will be the email address. */
		public ?NotificationPoliciesGetANotificationPolicyMechanisms $mechanisms = null,
		public ?\DateTimeImmutable $modified = null,
		/** Name of the policy. */
		public ?string $name = null,
	) {
	}
}
