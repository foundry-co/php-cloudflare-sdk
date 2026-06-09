<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Patch Pools
 */
readonly class LoadBalancerPoolsPatchPoolsRequest
{
	public function __construct(
		/** The email address to send health status notifications to. This field is now deprecated in favor of Cloudflare Notifications for Load Balancing, so only resetting this field with an empty string `""` is accepted. */
		public ?\FoundryCo\Cloudflare\Enums\LoadBalancerPoolsPatchPoolsRequestNotificationEmail $notificationEmail = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'notification_email' => $this->notificationEmail?->value,
		], fn ($v) => $v !== null);
	}
}
