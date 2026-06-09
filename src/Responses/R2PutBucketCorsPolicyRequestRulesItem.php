<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class R2PutBucketCorsPolicyRequestRulesItem
{
	public function __construct(
		/** Object specifying allowed origins, methods and headers for this CORS rule. */
		public R2PutBucketCorsPolicyRequestRulesItemAllowed $allowed,
		/** Specifies the headers that can be exposed back, and accessed by, the JavaScript making the cross-origin request. If you need to access headers beyond the safelisted response headers, such as Content-Encoding or cf-cache-status, you must specify it here. */
		public ?array $exposeHeaders = null,
		/** Identifier for this rule. */
		public ?string $id = null,
		/** Specifies the amount of time (in seconds) browsers are allowed to cache CORS preflight responses. Browsers may limit this to 2 hours or less, even if the maximum value (86400) is specified. */
		public ?float $maxAgeSeconds = null,
	) {
	}
}
