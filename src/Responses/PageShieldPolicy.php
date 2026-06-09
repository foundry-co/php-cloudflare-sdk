<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PageShieldPolicy
{
	public function __construct(
		/** The action to take if the expression matches */
		public \FoundryCo\Cloudflare\Enums\PageShieldPolicyAction $action,
		/** A description for the policy */
		public string $description,
		/** Whether the policy is enabled */
		public bool $enabled,
		/** The expression which must match for the policy to be applied, using the Cloudflare Firewall rule expression syntax */
		public string $expression,
		/** The policy which will be applied */
		public string $value,
		/** Identifier */
		public string $id,
	) {
	}
}
