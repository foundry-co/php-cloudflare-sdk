<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Defines rules for fine-grained control over content than signed URL tokens alone. Access rules primarily make tokens conditionally valid based on user information. Access Rules are specified on token payloads as the `accessRules` property containing an array of Rule objects.
 */
readonly class StreamVideosCreateSignedUrlTokensForVideosRequestAccessRulesItem
{
	public function __construct(
		/** The action to take when a request matches a rule. If the action is `block`, the signed token blocks views for viewers matching the rule. */
		public ?\FoundryCo\Cloudflare\Enums\StreamVideosCreateSignedUrlTokensForVideosRequestAccessRulesItemAction $action = null,
		/** An array of 2-letter country codes in ISO 3166-1 Alpha-2 format used to match requests. */
		public ?array $country = null,
		/** An array of IPv4 or IPV6 addresses or CIDRs used to match requests. */
		public ?array $ip = null,
		/** Lists available rule types to match for requests. An `any` type matches all requests and can be used as a wildcard to apply default actions after other rules. */
		public ?\FoundryCo\Cloudflare\Enums\StreamVideosCreateSignedUrlTokensForVideosRequestAccessRulesItemType $type = null,
	) {
	}
}
