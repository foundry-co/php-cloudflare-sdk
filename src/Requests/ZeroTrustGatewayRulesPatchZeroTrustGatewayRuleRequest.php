<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Patch a Zero Trust Gateway rule
 */
readonly class ZeroTrustGatewayRulesPatchZeroTrustGatewayRuleRequest
{
	public function __construct(
		/** Specify the rule description. */
		public ?string $description = null,
		/** Specify whether the rule is enabled. */
		public ?bool $enabled = null,
		/** Specify the rule name. */
		public ?string $name = null,
		/** Set the order of your rules. Lower values indicate higher precedence. At each processing phase, evaluate applicable rules in ascending order of this value. Refer to [Order of enforcement](http://developers.cloudflare.com/learning-paths/secure-internet-traffic/understand-policies/order-of-enforcement/#manage-precedence-with-terraform) to manage precedence via Terraform. */
		public ?int $precedence = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'description' => $this->description,
		    'enabled' => $this->enabled,
		    'name' => $this->name,
		    'precedence' => $this->precedence,
		], fn ($v) => $v !== null);
	}
}
