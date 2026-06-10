<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Modify organization profile.
 */
readonly class OrganizationsModifyProfileRequest
{
	public function __construct(
		public string $businessAddress,
		public string $businessEmail,
		public string $businessName,
		public string $businessPhone,
		public string $externalMetadata,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'business_address' => $this->businessAddress,
		    'business_email' => $this->businessEmail,
		    'business_name' => $this->businessName,
		    'business_phone' => $this->businessPhone,
		    'external_metadata' => $this->externalMetadata,
		], fn ($v) => $v !== null);
	}
}
