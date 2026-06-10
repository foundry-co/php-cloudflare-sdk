<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * The configuration object which contains the details for the WARP client to conduct the test.
 */
readonly class DeviceDexTestUpdateDeviceDexTestData
{
	public function __construct(
		/** The desired endpoint to test. */
		public ?string $host = null,
		/** The type of test. */
		public ?\FoundryCo\Cloudflare\Enums\DeviceDexTestUpdateDeviceDexTestDataKind $kind = null,
		/** The HTTP request method type. */
		public ?\FoundryCo\Cloudflare\Enums\DeviceDexTestUpdateDeviceDexTestDataMethod $method = null,
	) {
	}
}
