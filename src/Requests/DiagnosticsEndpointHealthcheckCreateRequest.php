<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Endpoint Health Check
 */
readonly class DiagnosticsEndpointHealthcheckCreateRequest
{
	public function __construct(
		/** type of check to perform */
		public \FoundryCo\Cloudflare\Enums\DiagnosticsEndpointHealthcheckCreateRequestCheckType $checkType,
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
