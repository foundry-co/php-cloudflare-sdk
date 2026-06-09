<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a Page Shield policy
 */
readonly class PageShieldUpdatePolicyRequest
{
	public function __construct(
		/** The action to take if the expression matches */
		public ?\FoundryCo\Cloudflare\Enums\PageShieldUpdatePolicyRequestAction $action = null,
		/** A description for the policy */
		public ?string $description = null,
		/** Whether the policy is enabled */
		public ?bool $enabled = null,
		/** The expression which must match for the policy to be applied, using the Cloudflare Firewall rule expression syntax */
		public ?string $expression = null,
		/** The policy which will be applied */
		public ?string $value = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'action' => $this->action?->value,
		    'description' => $this->description,
		    'enabled' => $this->enabled,
		    'expression' => $this->expression,
		    'value' => $this->value,
		], fn ($v) => $v !== null);
	}
}
