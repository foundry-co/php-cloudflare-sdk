<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update Web Analytics rules
 */
readonly class WebAnalyticsModifyRulesRequest
{
	public function __construct(
		/** A list of rule identifiers to delete. */
		public ?array $deleteRules = null,
		/** A list of rules to create or update. */
		public ?array $rules = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'delete_rules' => $this->deleteRules,
		    'rules' => $this->rules,
		], fn ($v) => $v !== null);
	}
}
