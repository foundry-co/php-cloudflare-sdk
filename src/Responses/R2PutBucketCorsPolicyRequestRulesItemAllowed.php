<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Object specifying allowed origins, methods and headers for this CORS rule.
 */
readonly class R2PutBucketCorsPolicyRequestRulesItemAllowed
{
	public function __construct(
		/** Specifies the value for the Access-Control-Allow-Methods header R2 sets when requesting objects in a bucket from a browser. */
		public array $methods,
		/** Specifies the value for the Access-Control-Allow-Origin header R2 sets when requesting objects in a bucket from a browser. */
		public array $origins,
		/** Specifies the value for the Access-Control-Allow-Headers header R2 sets when requesting objects in this bucket from a browser. Cross-origin requests that include custom headers (e.g. x-user-id) should specify these headers as AllowedHeaders. */
		public ?array $headers = null,
	) {
	}
}
