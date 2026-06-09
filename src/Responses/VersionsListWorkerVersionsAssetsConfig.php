<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configuration for assets within a Worker.
 */
readonly class VersionsListWorkerVersionsAssetsConfig
{
	public function __construct(
		/** Determines the redirects and rewrites of requests for HTML content. */
		public ?\FoundryCo\Cloudflare\Enums\VersionsListWorkerVersionsAssetsConfigHtmlHandling $htmlHandling = null,
		/** Determines the response when a request does not match a static asset, and there is no Worker script. */
		public ?\FoundryCo\Cloudflare\Enums\VersionsListWorkerVersionsAssetsConfigNotFoundHandling $notFoundHandling = null,
		public mixed $runWorkerFirst = null,
	) {
	}
}
