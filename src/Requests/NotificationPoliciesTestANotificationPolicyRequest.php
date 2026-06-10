<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Test a Notification policy
 */
readonly class NotificationPoliciesTestANotificationPolicyRequest
{
	public function __construct(
		/** Severity level for the test alert. Defaults to INFO (1) if omitted. */
		public ?\FoundryCo\Cloudflare\Enums\NotificationPoliciesTestANotificationPolicyRequestSeverity $severity = null,
		/** Source identifier for the test alert. */
		public ?string $source = null,
		/** Correlation ID for stateful test alerts. Required when state_event is set. */
		public ?string $stateCorrelationId = null,
		/** State event type for stateful test alerts. Use with state_correlation_id. */
		public ?\FoundryCo\Cloudflare\Enums\NotificationPoliciesTestANotificationPolicyRequestStateEvent $stateEvent = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'severity' => $this->severity?->value,
		    'source' => $this->source,
		    'state_correlation_id' => $this->stateCorrelationId,
		    'state_event' => $this->stateEvent?->value,
		], fn ($v) => $v !== null);
	}
}
