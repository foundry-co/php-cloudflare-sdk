<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a saved event query
 */
readonly class PatchEventQueryUpdateRequest
{
	public function __construct(
		/** Enable alerts for this query */
		public ?bool $alertEnabled = null,
		/** Enable alert rollup for this query */
		public ?bool $alertRollupEnabled = null,
		/** Unique name for the saved query */
		public ?string $name = null,
		/** JSON string containing the query parameters */
		public ?string $queryJson = null,
		/** Enable rule for this query */
		public ?bool $ruleEnabled = null,
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
