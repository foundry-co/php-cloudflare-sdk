<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a User Agent Blocking rule
 */
readonly class UserAgentBlockingRulesCreateAUserAgentBlockingRuleRequest
{
	public function __construct(
		public \FoundryCo\Cloudflare\Responses\UserAgentBlockingRulesCreateAUserAgentBlockingRuleRequestConfiguration $configuration,
		/** The action to apply to a matched request. */
		public \FoundryCo\Cloudflare\Enums\UserAgentBlockingRulesCreateAUserAgentBlockingRuleRequestMode $mode,
		/** An informative summary of the rule. This value is sanitized and any tags will be removed. */
		public ?string $description = null,
		/** When true, indicates that the rule is currently paused. */
		public ?bool $paused = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'configuration' => $this->configuration->toArray(),
		    'mode' => $this->mode->value,
		    'description' => $this->description,
		    'paused' => $this->paused,
		], fn ($v) => $v !== null);
	}
}
