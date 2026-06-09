<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create Resource Group
 */
readonly class AccountResourceGroupCreateRequest
{
	public function __construct(
		/** Name of the resource group */
		public string $name,
		/** A scope is a combination of scope objects which provides additional context. */
		public \FoundryCo\Cloudflare\Responses\AccountResourceGroupCreateRequestScope $scope,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'scope' => $this->scope->toArray(),
		], fn ($v) => $v !== null);
	}
}
