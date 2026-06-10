<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DeviceDexTestDetails
{
	public function __construct(
		/** The configuration object which contains the details for the WARP client to conduct the test. */
		public ?DeviceDexTestDetailsData $data = null,
		/** Determines whether or not the test is active. */
		public ?bool $enabled = null,
		/** How often the test will run. */
		public ?string $interval = null,
		/** The name of the DEX test. Must be unique. */
		public ?string $name = null,
		/** Additional details about the test. */
		public ?string $description = null,
		/** DEX rules targeted by this test */
		public ?array $targetPolicies = null,
		public ?bool $targeted = null,
		/** The unique identifier for the test. */
		public ?string $testId = null,
	) {
	}
}
