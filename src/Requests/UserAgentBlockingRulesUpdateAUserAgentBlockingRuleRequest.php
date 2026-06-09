<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a User Agent Blocking rule
 */
readonly class UserAgentBlockingRulesUpdateAUserAgentBlockingRuleRequest
{
	public function __construct(
		/** The rule configuration. */
		public mixed $configuration,
		/** The unique identifier of the resource. */
		public string $id,
		/** The action to apply to a matched request. */
		public \FoundryCo\Cloudflare\Enums\UserAgentBlockingRulesUpdateAUserAgentBlockingRuleRequestMode $mode,
		/** An informative summary of the rule. This value is sanitized and any tags will be removed. */
		public ?string $description = null,
		/** When true, indicates that the rule is currently paused. */
		public ?bool $paused = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'configuration' => $this->configuration,
		    'id' => $this->id,
		    'mode' => $this->mode->value,
		    'description' => $this->description,
		    'paused' => $this->paused,
		], fn ($v) => $v !== null);
	}
}
