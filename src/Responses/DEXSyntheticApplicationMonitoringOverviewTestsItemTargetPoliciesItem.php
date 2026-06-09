<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DEXSyntheticApplicationMonitoringOverviewTestsItemTargetPoliciesItem
{
	public function __construct(
		/** Whether the policy is the default for the account */
		public bool $default,
		public array $id,
		public string $name,
	) {
	}
}
