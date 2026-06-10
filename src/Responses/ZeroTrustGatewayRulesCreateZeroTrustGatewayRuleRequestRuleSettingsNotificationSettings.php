<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configure a notification to display on the user's device when this rule matched. Settable for all types of rules with the action set to `block`.
 */
readonly class ZeroTrustGatewayRulesCreateZeroTrustGatewayRuleRequestRuleSettingsNotificationSettings
{
	public function __construct(
		/** Enable notification. */
		public ?bool $enabled = null,
		/** Indicates whether to pass the context information as query parameters. */
		public ?bool $includeContext = null,
		/** Customize the message shown in the notification. */
		public ?string $msg = null,
		/** Defines an optional URL to direct users to additional information. If unset, the notification opens a block page. */
		public ?string $supportUrl = null,
	) {
	}
}
