<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Value of the zone setting.
 */
readonly class ZoneSettingsSettingValue
{
	public function __construct(
		/** Whether the feature is enabled or not. */
		public ?bool $enabled = null,
		/** Egress pool id which refers to a grouping of dedicated egress IPs through which Cloudflare will connect to origin. */
		public ?string $poolId = null,
	) {
	}
}
