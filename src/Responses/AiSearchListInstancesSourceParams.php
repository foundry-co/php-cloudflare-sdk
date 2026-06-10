<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AiSearchListInstancesSourceParams
{
	public function __construct(
		/** List of path patterns to exclude. Uses micromatch glob syntax: * matches within a path segment, ** matches across path segments (e.g., /admin/** matches /admin/users and /admin/settings/advanced) */
		public ?array $excludeItems = null,
		/** List of path patterns to include. Uses micromatch glob syntax: * matches within a path segment, ** matches across path segments (e.g., /blog/** matches /blog/post and /blog/2024/post) */
		public ?array $includeItems = null,
		public ?string $prefix = null,
		public ?string $r2Jurisdiction = null,
		public ?AiSearchListInstancesSourceParamsWebCrawler $webCrawler = null,
	) {
	}
}
