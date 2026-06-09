<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * All zones owned by the user will have the rule applied.
 */
readonly class IPAccessRulesForAnAccountRulesScope
{
	public function __construct(
		public ?array $email = null,
		public ?array $id = null,
		/** Defines the scope of the rule. */
		public ?\FoundryCo\Cloudflare\Enums\IPAccessRulesForAnAccountRulesScopeType $type = null,
	) {
	}
}
