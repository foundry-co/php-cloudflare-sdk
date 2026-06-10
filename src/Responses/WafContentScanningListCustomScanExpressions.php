<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Defines a custom scan expression to match Content Scanning on.
 */
readonly class WafContentScanningListCustomScanExpressions
{
	public function __construct(
		/** defines the unique ID for this custom scan expression. */
		public mixed $id = null,
		/** Defines the ruleset expression to use in matching content objects. */
		public ?string $payload = null,
	) {
	}
}
