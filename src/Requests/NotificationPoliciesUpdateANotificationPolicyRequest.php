<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a Notification policy
 */
readonly class NotificationPoliciesUpdateANotificationPolicyRequest
{
	public function __construct(
		/** Optional specification of how often to re-alert from the same incident, not support on all alert types. */
		public ?string $alertInterval = null,
		/** Refers to which event will trigger a Notification dispatch. You can use the endpoint to get available alert types which then will give you a list of possible values. */
		public ?\FoundryCo\Cloudflare\Enums\NotificationPoliciesUpdateANotificationPolicyRequestAlertType $alertType = null,
		/** Optional description for the Notification policy. */
		public ?string $description = null,
		/** Whether or not the Notification policy is enabled. */
		public ?bool $enabled = null,
		/** Optional filters that allow you to be alerted only on a subset of events for that alert type based on some criteria. This is only available for select alert types. See alert type documentation for more details. */
		public ?\FoundryCo\Cloudflare\Responses\NotificationPoliciesUpdateANotificationPolicyRequestFilters $filters = null,
		/** List of IDs that will be used when dispatching a notification. IDs for email type will be the email address. */
		public ?\FoundryCo\Cloudflare\Responses\NotificationPoliciesUpdateANotificationPolicyRequestMechanisms $mechanisms = null,
		/** Name of the policy. */
		public ?string $name = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'alert_interval' => $this->alertInterval,
		    'alert_type' => $this->alertType?->value,
		    'description' => $this->description,
		    'enabled' => $this->enabled,
		    'filters' => $this->filters?->toArray(),
		    'mechanisms' => $this->mechanisms?->toArray(),
		    'name' => $this->name,
		], fn ($v) => $v !== null);
	}
}
