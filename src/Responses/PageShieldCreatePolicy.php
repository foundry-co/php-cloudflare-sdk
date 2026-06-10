<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PageShieldCreatePolicy
{
	public function __construct(
		/** The action to take if the expression matches */
		public ?\FoundryCo\Cloudflare\Enums\PageShieldCreatePolicyAction $action = null,
		/** A description for the policy */
		public ?string $description = null,
		/** Whether the policy is enabled */
		public ?bool $enabled = null,
		/** The expression which must match for the policy to be applied, using the Cloudflare Firewall rule expression syntax */
		public ?string $expression = null,
		/** The policy which will be applied */
		public ?string $value = null,
		/** Identifier */
		public ?string $id = null,
	) {
	}
}
