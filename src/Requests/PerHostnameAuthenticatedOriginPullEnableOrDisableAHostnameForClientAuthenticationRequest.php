<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Enable or Disable a Hostname for Client Authentication
 */
readonly class PerHostnameAuthenticatedOriginPullEnableOrDisableAHostnameForClientAuthenticationRequest
{
	public function __construct(
		public array $config,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'config' => $this->config,
		], fn ($v) => $v !== null);
	}
}
