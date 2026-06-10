<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A rule object containing conditions and overrides for this load balancer to evaluate.
 */
readonly class LoadBalancersCreateLoadBalancerRulesItem
{
	public function __construct(
		/** The condition expressions to evaluate. If the condition evaluates to true, the overrides or fixed_response in this rule will be applied. An empty condition is always true. For more details on condition expressions, please see https://developers.cloudflare.com/load-balancing/understand-basics/load-balancing-rules/expressions. */
		public ?string $condition = null,
		/** Disable this specific rule. It will no longer be evaluated by this load balancer. */
		public ?bool $disabled = null,
		/** A collection of fields used to directly respond to the eyeball instead of routing to a pool. If a fixed_response is supplied the rule will be marked as terminates. */
		public ?LoadBalancersCreateLoadBalancerRulesItemFixedResponse $fixedResponse = null,
		/** Name of this rule. Only used for human readability. */
		public ?string $name = null,
		/** A collection of overrides to apply to the load balancer when this rule's condition is true. All fields are optional. */
		public ?LoadBalancersCreateLoadBalancerRulesItemOverrides $overrides = null,
		/** The order in which rules should be executed in relation to each other. Lower values are executed first. Values do not need to be sequential. If no value is provided for any rule the array order of the rules field will be used to assign a priority. */
		public ?int $priority = null,
		/** If this rule's condition is true, this causes rule evaluation to stop after processing this rule. */
		public ?bool $terminates = null,
	) {
	}
}
