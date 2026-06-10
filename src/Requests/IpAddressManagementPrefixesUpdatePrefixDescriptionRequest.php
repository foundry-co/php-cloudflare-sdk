<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update Prefix Description
 */
readonly class IpAddressManagementPrefixesUpdatePrefixDescriptionRequest
{
	public function __construct(
		/** Description of the prefix. */
		public string $description,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'description' => $this->description,
		], fn ($v) => $v !== null);
	}
}
