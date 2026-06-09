<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Indicator counts from the unified file the loader received
 */
readonly class CustomIndicatorFeedsMetadataLastUploadSummaryUploaded
{
	public function __construct(
		/** Number of domain indicators in the upload */
		public ?int $domains = null,
		/** Number of IP indicators in the upload */
		public ?int $ips = null,
		/** Number of URL indicators in the upload */
		public ?int $urls = null,
	) {
	}
}
