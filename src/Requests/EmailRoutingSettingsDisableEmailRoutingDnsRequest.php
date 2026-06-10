<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Disable Email Routing
 */
readonly class EmailRoutingSettingsDisableEmailRoutingDnsRequest
{
	public function __construct(
		/** Domain of your zone. */
		public ?string $name = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		], fn ($v) => $v !== null);
	}
}
