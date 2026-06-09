<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DevicesDeviceDisableForTime
{
	public function __construct(
		/** Override code that is valid for 1 hour. */
		public ?string $t1 = null,
		/** Override code that is valid for 12 hour2. */
		public ?string $t12 = null,
		/** Override code that is valid for 24 hour.2. */
		public ?string $t24 = null,
		/** Override code that is valid for 3 hours. */
		public ?string $t3 = null,
		/** Override code that is valid for 6 hours. */
		public ?string $t6 = null,
	) {
	}
}
