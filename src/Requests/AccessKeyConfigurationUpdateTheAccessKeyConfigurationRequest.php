<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update the Access key configuration
 */
readonly class AccessKeyConfigurationUpdateTheAccessKeyConfigurationRequest
{
	public function __construct(
		/** The number of days between key rotations. */
		public float $keyRotationIntervalDays,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'key_rotation_interval_days' => $this->keyRotationIntervalDays,
		], fn ($v) => $v !== null);
	}
}
