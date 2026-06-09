<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a WAF package
 */
readonly class WafPackagesUpdateAWafPackageRequest
{
	public function __construct(
		/** The default action performed by the rules in the WAF package. */
		public ?\FoundryCo\Cloudflare\Enums\WafPackagesUpdateAWafPackageRequestActionMode $actionMode = null,
		/** The sensitivity of the WAF package. */
		public ?\FoundryCo\Cloudflare\Enums\WafPackagesUpdateAWafPackageRequestSensitivity $sensitivity = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'action_mode' => $this->actionMode?->value,
		    'sensitivity' => $this->sensitivity?->value,
		], fn ($v) => $v !== null);
	}
}
