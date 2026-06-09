<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DEXSyntheticApplicationMonitoringPath
{
	public function __construct(
		/** an array of the hops taken by the device to reach the end destination */
		public array $hops,
		/** API Resource UUID tag. */
		public string $resultId,
		/** name of the device associated with this network path response */
		public ?string $deviceName = null,
		/** API Resource UUID tag. */
		public ?string $testId = null,
		/** name of the tracroute test */
		public ?string $testName = null,
	) {
	}
}
