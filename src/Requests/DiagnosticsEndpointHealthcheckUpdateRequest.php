<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update Endpoint Health Check
 */
readonly class DiagnosticsEndpointHealthcheckUpdateRequest
{
	public function __construct(
		/** type of check to perform */
		public \FoundryCo\Cloudflare\Enums\DiagnosticsEndpointHealthcheckUpdateRequestCheckType $checkType,
		/** the IP address of the host to perform checks against */
		public string $endpoint,
		/** Optional name associated with this check */
		public ?string $name = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'check_type' => $this->checkType->value,
		    'endpoint' => $this->endpoint,
		    'name' => $this->name,
		], fn ($v) => $v !== null);
	}
}
