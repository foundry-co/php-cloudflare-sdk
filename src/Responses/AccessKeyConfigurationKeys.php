<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccessKeyConfigurationKeys
{
	public function __construct(
		/** The number of days until the next key rotation. */
		public ?float $daysUntilNextRotation = null,
		/** The number of days between key rotations. */
		public ?float $keyRotationIntervalDays = null,
		/** The timestamp of the previous key rotation. */
		public ?\DateTimeImmutable $lastKeyRotationAt = null,
	) {
	}
}
