<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Edit Credential
 */
readonly class EditCredentialRequest
{
	public function __construct(
		/** Where the credential is attached in outgoing requests. */
		public ?\FoundryCo\Cloudflare\Enums\EditCredentialRequestLocation $location = null,
		/**
		 * Name of the header or cookie where the credential is attached.
		 */
		public ?string $locationName = null,
		/** Human-readable name. */
		public ?string $name = null,
		/**
		 * The credential value. Write-only. Never returned in responses.
		 */
		public ?string $value = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'location' => $this->location?->value,
		    'location_name' => $this->locationName,
		    'name' => $this->name,
		    'value' => $this->value,
		], fn ($v) => $v !== null);
	}
}
