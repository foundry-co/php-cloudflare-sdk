<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DeviceDexTestUpdateDeviceDexTestRequestTargetPoliciesItem
{
	public function __construct(
		/** API Resource UUID tag. */
		public string $id,
		/** Whether the DEX rule is the account default */
		public ?bool $default = null,
		/** The name of the DEX rule */
		public ?string $name = null,
	) {
	}
}
