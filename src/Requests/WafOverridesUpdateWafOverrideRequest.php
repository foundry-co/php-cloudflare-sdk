<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update WAF override
 */
readonly class WafOverridesUpdateWafOverrideRequest
{
	public function __construct(
		/** Defines an identifier. */
		public string $id,
		/** Specifies that, when a WAF rule matches, its configured action will be replaced by the action configured in this object. */
		public \FoundryCo\Cloudflare\Responses\WafOverridesUpdateWafOverrideRequestRewriteAction $rewriteAction,
		/** An object that allows you to override the action of specific WAF rules. Each key of this object must be the ID of a WAF rule, and each value must be a valid WAF action. Unless you are disabling a rule, ensure that you also enable the rule group that this WAF rule belongs to. When creating a new URI-based WAF override, you must provide a `groups` object or a `rules` object. */
		public array $rules,
		/** The URLs to include in the current WAF override. You can use wildcards. Each entered URL will be escaped before use, which means you can only use simple wildcard patterns. */
		public array $urls,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'id' => $this->id,
		    'rewrite_action' => $this->rewriteAction->toArray(),
		    'rules' => $this->rules,
		    'urls' => $this->urls,
		], fn ($v) => $v !== null);
	}
}
