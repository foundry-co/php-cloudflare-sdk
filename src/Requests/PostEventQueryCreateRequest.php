<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a saved event query
 */
readonly class PostEventQueryCreateRequest
{
	public function __construct(
		/** Enable alerts for this query */
		public bool $alertEnabled,
		/** Enable alert rollup for this query */
		public bool $alertRollupEnabled,
		/** Unique name for the saved query */
		public string $name,
		/** JSON string containing the query parameters */
		public string $queryJson,
		/** Enable rule for this query */
		public bool $ruleEnabled,
		/** Scope for the rule */
		public ?string $ruleScope = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'alert_enabled' => $this->alertEnabled,
		    'alert_rollup_enabled' => $this->alertRollupEnabled,
		    'name' => $this->name,
		    'query_json' => $this->queryJson,
		    'rule_enabled' => $this->ruleEnabled,
		    'rule_scope' => $this->ruleScope,
		], fn ($v) => $v !== null);
	}
}
