<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class GetDexRuleTargetedTestsItem
{
	public function __construct(
		/** The configuration object which contains the details for the WARP client to conduct the test. */
		public ?GetDexRuleTargetedTestsItemData $data = null,
		public ?bool $enabled = null,
		public ?string $name = null,
		public ?string $testId = null,
	) {
	}
}
