<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DEXSyntheticApplicationMonitoringDetails
{
	public function __construct(
		/** The configuration object which contains the details for the WARP client to conduct the test. */
		public DEXSyntheticApplicationMonitoringDetailsData $data,
		/** Determines whether or not the test is active. */
		public bool $enabled,
		/** How often the test will run. */
		public string $interval,
		/** The name of the DEX test. Must be unique. */
		public string $name,
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
