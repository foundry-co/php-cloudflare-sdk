<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DevicePostureRulesListDevicePostureRules
{
	public function __construct(
		/** The description of the device posture rule. */
		public ?string $description = null,
		/** Sets the expiration time for a posture check result. If empty, the result remains valid until it is overwritten by new data from the WARP client. */
		public ?string $expiration = null,
		/** API UUID. */
		public ?string $id = null,
		/** The value to be checked against. */
		public mixed $input = null,
		/** The conditions that the client must match to run the rule. */
		public ?array $match = null,
		/** The name of the device posture rule. */
		public ?string $name = null,
		/** Polling frequency for the WARP client posture check. Default: `5m` (poll every five minutes). Minimum: `1m`. */
		public ?string $schedule = null,
		/** The type of device posture rule. */
		public ?\FoundryCo\Cloudflare\Enums\DevicePostureRulesListDevicePostureRulesType $type = null,
	) {
	}
}
