<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * All zones owned by the user will have the rule applied.
 */
readonly class IpAccessRulesForAnAccountGetAnIpAccessRuleScope
{
	public function __construct(
		/** The contact email address of the user. */
		public ?string $email = null,
		/** Defines an identifier. */
		public ?string $id = null,
		/** Defines the scope of the rule. */
		public ?\FoundryCo\Cloudflare\Enums\IpAccessRulesForAnAccountGetAnIpAccessRuleScopeType $type = null,
	) {
	}
}
