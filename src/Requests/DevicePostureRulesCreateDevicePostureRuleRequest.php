<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a device posture rule
 */
readonly class DevicePostureRulesCreateDevicePostureRuleRequest
{
	public function __construct(
		/** The name of the device posture rule. */
		public string $name,
		/** The type of device posture rule. */
		public \FoundryCo\Cloudflare\Enums\DevicePostureRulesCreateDevicePostureRuleRequestType $type,
		/** The description of the device posture rule. */
		public ?string $description = null,
		/** Sets the expiration time for a posture check result. If empty, the result remains valid until it is overwritten by new data from the WARP client. */
		public ?string $expiration = null,
		/** The value to be checked against. */
		public mixed $input = null,
		/** The conditions that the client must match to run the rule. */
		public ?array $match = null,
		/** Polling frequency for the WARP client posture check. Default: `5m` (poll every five minutes). Minimum: `1m`. */
		public ?string $schedule = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'type' => $this->type->value,
		    'description' => $this->description,
		    'expiration' => $this->expiration,
		    'input' => $this->input,
		    'match' => $this->match,
		    'schedule' => $this->schedule,
		], fn ($v) => $v !== null);
	}
}
