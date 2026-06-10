<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update Resource Group
 */
readonly class AccountResourceGroupUpdateRequest
{
	public function __construct(
		/** Name of the resource group */
		public ?string $name = null,
		/** A scope is a combination of scope objects which provides additional context. */
		public ?\FoundryCo\Cloudflare\Responses\AccountResourceGroupUpdateRequestScope $scope = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'scope' => $this->scope?->toArray(),
		], fn ($v) => $v !== null);
	}
}
