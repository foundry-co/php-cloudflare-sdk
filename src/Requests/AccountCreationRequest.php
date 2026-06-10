<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create an account
 */
readonly class AccountCreationRequest
{
	public function __construct(
		/** Account name */
		public string $name,
		public ?\FoundryCo\Cloudflare\Enums\AccountCreationRequestType $type = null,
		/** information related to the tenant unit, and optionally, an id of the unit to create the account on. see https://developers.cloudflare.com/tenant/how-to/manage-accounts/ */
		public ?\FoundryCo\Cloudflare\Responses\AccountCreationRequestUnit $unit = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'type' => $this->type?->value,
		    'unit' => $this->unit?->toArray(),
		], fn ($v) => $v !== null);
	}
}
