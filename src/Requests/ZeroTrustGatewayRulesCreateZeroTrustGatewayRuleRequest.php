<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a Zero Trust Gateway rule
 */
readonly class ZeroTrustGatewayRulesCreateZeroTrustGatewayRuleRequest
{
	public function __construct(
		/** Specify the action to perform when the associated traffic, identity, and device posture expressions either absent or evaluate to `true`. */
		public \FoundryCo\Cloudflare\Enums\ZeroTrustGatewayRulesCreateZeroTrustGatewayRuleRequestAction $action,
		/** Specify the rule name. */
		public string $name,
		/** Specify the rule description. */
		public ?string $description = null,
		/** Specify the wirefilter expression used for device posture check. The API automatically formats and sanitizes expressions before storing them. To prevent Terraform state drift, use the formatted expression returned in the API response. */
		public ?string $devicePosture = null,
		/** Specify whether the rule is enabled. */
		public ?bool $enabled = null,
		/** Defines the expiration time stamp and default duration of a DNS policy. Takes precedence over the policy's `schedule` configuration, if any. This  does not apply to HTTP or network policies. Settable only for `dns` rules. */
		public ?\FoundryCo\Cloudflare\Responses\ZeroTrustGatewayRulesCreateZeroTrustGatewayRuleRequestExpiration $expiration = null,
		/** Specify the protocol or layer to evaluate the traffic, identity, and device posture expressions. Can only contain a single value. */
		public ?array $filters = null,
		/** Specify the wirefilter expression used for identity matching. The API automatically formats and sanitizes expressions before storing them. To prevent Terraform state drift, use the formatted expression returned in the API response. */
		public ?string $identity = null,
		/** Set the order of your rules. Lower values indicate higher precedence. At each processing phase, evaluate applicable rules in ascending order of this value. Refer to [Order of enforcement](http://developers.cloudflare.com/learning-paths/secure-internet-traffic/understand-policies/order-of-enforcement/#manage-precedence-with-terraform) to manage precedence via Terraform. */
		public ?int $precedence = null,
		/** Defines settings for this rule. Settings apply only to specific rule types and must use compatible selectors. If Terraform detects drift, confirm the setting supports your rule type and check whether the API modifies the value. Use API-returned values in your configuration to prevent drift. */
		public ?\FoundryCo\Cloudflare\Responses\ZeroTrustGatewayRulesCreateZeroTrustGatewayRuleRequestRuleSettings $ruleSettings = null,
		/** Defines the schedule for activating DNS policies. Settable only for `dns` and `dns_resolver` rules. */
		public ?\FoundryCo\Cloudflare\Responses\ZeroTrustGatewayRulesCreateZeroTrustGatewayRuleRequestSchedule $schedule = null,
		/** Specify the wirefilter expression used for traffic matching. The API automatically formats and sanitizes expressions before storing them. To prevent Terraform state drift, use the formatted expression returned in the API response. */
		public ?string $traffic = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'action' => $this->action->value,
		    'name' => $this->name,
		    'description' => $this->description,
		    'device_posture' => $this->devicePosture,
		    'enabled' => $this->enabled,
		    'expiration' => $this->expiration?->toArray(),
		    'filters' => $this->filters?->value,
		    'identity' => $this->identity,
		    'precedence' => $this->precedence,
		    'rule_settings' => $this->ruleSettings?->toArray(),
		    'schedule' => $this->schedule?->toArray(),
		    'traffic' => $this->traffic,
		], fn ($v) => $v !== null);
	}
}
