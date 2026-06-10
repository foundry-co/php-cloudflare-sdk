<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WafOverridesListWafOverrides
{
	public function __construct(
		/** An informative summary of the current URI-based WAF override. */
		public ?string $description = null,
		/** An object that allows you to enable or disable WAF rule groups for the current WAF override. Each key of this object must be the ID of a WAF rule group, and each value must be a valid WAF action (usually `default` or `disable`). When creating a new URI-based WAF override, you must provide a `groups` object or a `rules` object. */
		public ?array $groups = null,
		/** The unique identifier of the WAF override. */
		public ?string $id = null,
		/** When true, indicates that the rule is currently paused. */
		public ?bool $paused = null,
		/** The relative priority of the current URI-based WAF override when multiple overrides match a single URL. A lower number indicates higher priority. Higher priority overrides may overwrite values set by lower priority overrides. */
		public ?float $priority = null,
		/** Specifies that, when a WAF rule matches, its configured action will be replaced by the action configured in this object. */
		public ?WafOverridesListWafOverridesRewriteAction $rewriteAction = null,
		/** An object that allows you to override the action of specific WAF rules. Each key of this object must be the ID of a WAF rule, and each value must be a valid WAF action. Unless you are disabling a rule, ensure that you also enable the rule group that this WAF rule belongs to. When creating a new URI-based WAF override, you must provide a `groups` object or a `rules` object. */
		public ?array $rules = null,
		/** The URLs to include in the current WAF override. You can use wildcards. Each entered URL will be escaped before use, which means you can only use simple wildcard patterns. */
		public ?array $urls = null,
	) {
	}
}
