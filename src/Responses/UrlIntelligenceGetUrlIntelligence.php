<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UrlIntelligenceGetUrlIntelligence
{
	public function __construct(
		/** Content categories associated with this URL. */
		public ?array $contentCategories = null,
		/** The full URL that was looked up. */
		public ?string $fullUrl = null,
		/** The hostname of the URL. */
		public ?string $hostname = null,
		/** Security risk types associated with this URL. */
		public ?array $riskType = null,
		/** The path component of the URL. */
		public ?string $urlPath = null,
	) {
	}
}
