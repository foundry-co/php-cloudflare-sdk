<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A scope object represents any resource that can have actions applied against invite.
 */
readonly class AccountResourceGroupCreateRequestScopeObjectsItem
{
	public function __construct(
		/** This is a combination of pre-defined resource name and identifier (like Zone ID etc.) */
		public array $key,
	) {
	}
}
