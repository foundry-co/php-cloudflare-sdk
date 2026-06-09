<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DEXRulesRuleTargetedTestsItem
{
	public function __construct(
		/** The configuration object which contains the details for the WARP client to conduct the test. */
		public DEXRulesRuleTargetedTestsItemData $data,
		public bool $enabled,
		public string $name,
		public string $testId,
	) {
	}
}
