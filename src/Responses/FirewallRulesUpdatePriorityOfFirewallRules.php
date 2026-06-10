<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class FirewallRulesUpdatePriorityOfFirewallRules
{
	public function __construct(
		/** The action to apply to a matched request. The `log` action is only available on an Enterprise plan. */
		public ?\FoundryCo\Cloudflare\Enums\FirewallRulesUpdatePriorityOfFirewallRulesAction $action = null,
		/** An informative summary of the firewall rule. */
		public ?string $description = null,
		/** The unique identifier of the firewall rule. */
		public ?string $id = null,
		/** When true, indicates that the firewall rule is currently paused. */
		public ?bool $paused = null,
		/** The priority of the rule. Optional value used to define the processing order. A lower number indicates a higher priority. If not provided, rules with a defined priority will be processed before rules without a priority. */
		public ?float $priority = null,
		public ?array $products = null,
		/** A short reference tag. Allows you to select related firewall rules. */
		public ?string $ref = null,
		public mixed $filter = null,
	) {
	}
}
