<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DeviceDexTestDeleteDeviceDexTestDexTestsItemTargetPoliciesItem
{
	public function __construct(
		/** API Resource UUID tag. */
		public ?string $id = null,
		/** Whether the DEX rule is the account default */
		public ?bool $default = null,
		/** The name of the DEX rule */
		public ?string $name = null,
	) {
	}
}
