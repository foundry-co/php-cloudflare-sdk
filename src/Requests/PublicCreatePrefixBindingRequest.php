<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a DLS prefix binding
 */
readonly class PublicCreatePrefixBindingRequest
{
	public function __construct(
		/** IP prefix in CIDR notation to bind. */
		public string $cidr,
		/** The ID of the parent IP prefix that contains the CIDR. */
		public string $prefixId,
		/** Region key from managed regions (e.g., "us", "eu"). */
		public string $regionKey,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'cidr' => $this->cidr,
		    'prefix_id' => $this->prefixId,
		    'region_key' => $this->regionKey,
		], fn ($v) => $v !== null);
	}
}
