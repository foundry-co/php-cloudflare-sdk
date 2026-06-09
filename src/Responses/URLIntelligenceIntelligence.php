<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class URLIntelligenceIntelligence
{
	public function __construct(
		/** Content categories associated with this URL. */
		public array $contentCategories,
		/** The full URL that was looked up. */
		public string $fullUrl,
		/** The hostname of the URL. */
		public string $hostname,
		/** Security risk types associated with this URL. */
		public array $riskType,
		/** The path component of the URL. */
		public string $urlPath,
	) {
	}
}
