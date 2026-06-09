<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create an IP Access rule
 */
readonly class IpAccessRulesForAnAccountCreateAnIpAccessRuleRequest
{
	public function __construct(
		/** The rule configuration. */
		public mixed $configuration,
		/** The action to apply to a matched request. */
		public \FoundryCo\Cloudflare\Enums\IpAccessRulesForAnAccountCreateAnIpAccessRuleRequestMode $mode,
		public mixed $notes = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'configuration' => $this->configuration,
		    'mode' => $this->mode->value,
		    'notes' => $this->notes,
		], fn ($v) => $v !== null);
	}
}
