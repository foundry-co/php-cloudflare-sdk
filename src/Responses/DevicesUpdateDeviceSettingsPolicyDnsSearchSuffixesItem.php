<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DevicesUpdateDeviceSettingsPolicyDnsSearchSuffixesItem
{
	public function __construct(
		/** The DNS search suffix to append when resolving short hostnames. */
		public ?string $suffix = null,
		/** A description of the DNS search suffix. */
		public ?string $description = null,
	) {
	}
}
