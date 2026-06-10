<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Preview sending subdomain DNS
 */
readonly class EmailSendingSubdomainsPreviewSendingSubdomainRequest
{
	public function __construct(
		/** The subdomain name. Must be within the zone. */
		public string $name,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		], fn ($v) => $v !== null);
	}
}
