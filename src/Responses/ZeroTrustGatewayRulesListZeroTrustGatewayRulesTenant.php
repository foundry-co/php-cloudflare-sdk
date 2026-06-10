<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZeroTrustGatewayRulesListZeroTrustGatewayRulesTenant
{
	public function __construct(
		/** Specify the action to perform when the associated traffic, identity, and device posture expressions either absent or evaluate to `true`. */
		public ?\FoundryCo\Cloudflare\Enums\ZeroTrustGatewayRulesListZeroTrustGatewayRulesTenantAction $action = null,
		/** Specify whether the rule is enabled. */
		public ?bool $enabled = null,
		/** Specify the protocol or layer to evaluate the traffic, identity, and device posture expressions. Can only contain a single value. */
		public ?array $filters = null,
		/** Specify the rule name. */
		public ?string $name = null,
		/** Set the order of your rules. Lower values indicate higher precedence. At each processing phase, evaluate applicable rules in ascending order of this value. Refer to [Order of enforcement](http://developers.cloudflare.com/learning-paths/secure-internet-traffic/understand-policies/order-of-enforcement/#manage-precedence-with-terraform) to manage precedence via Terraform. */
		public ?int $precedence = null,
		/** Specify the wirefilter expression used for traffic matching. The API automatically formats and sanitizes expressions before storing them. To prevent Terraform state drift, use the formatted expression returned in the API response. */
		public ?string $traffic = null,
		public ?\DateTimeImmutable $createdAt = null,
		/** Indicate the date of deletion, if any. */
		public ?\DateTimeImmutable $deletedAt = null,
		/** Specify the rule description. */
		public ?string $description = null,
		/** Specify the wirefilter expression used for device posture check. The API automatically formats and sanitizes expressions before storing them. To prevent Terraform state drift, use the formatted expression returned in the API response. */
		public ?string $devicePosture = null,
		/** Defines the expiration time stamp and default duration of a DNS policy. Takes precedence over the policy's `schedule` configuration, if any. This  does not apply to HTTP or network policies. Settable only for `dns` rules. */
		public ?ZeroTrustGatewayRulesListZeroTrustGatewayRulesTenantExpiration $expiration = null,
		/** Identify the API resource with a UUID. */
		public ?string $id = null,
		/** Specify the wirefilter expression used for identity matching. The API automatically formats and sanitizes expressions before storing them. To prevent Terraform state drift, use the formatted expression returned in the API response. */
		public ?string $identity = null,
		/** Indicate that this rule is shared via the Orgs API and read only. */
		public ?bool $readOnly = null,
		/** Defines settings for this rule. Settings apply only to specific rule types and must use compatible selectors. If Terraform detects drift, confirm the setting supports your rule type and check whether the API modifies the value. Use API-returned values in your configuration to prevent drift. */
		public ?ZeroTrustGatewayRulesListZeroTrustGatewayRulesTenantRuleSettings $ruleSettings = null,
		/** Defines the schedule for activating DNS policies. Settable only for `dns` and `dns_resolver` rules. */
		public ?ZeroTrustGatewayRulesListZeroTrustGatewayRulesTenantSchedule $schedule = null,
		/** Indicate that this rule is sharable via the Orgs API. */
		public ?bool $sharable = null,
		/** Provide the account tag of the account that created the rule. */
		public ?string $sourceAccount = null,
		public ?\DateTimeImmutable $updatedAt = null,
		/** Indicate the version number of the rule(read-only). */
		public ?int $version = null,
		/** Indicate a warning for a misconfigured rule, if any. */
		public ?string $warningStatus = null,
	) {
	}
}
