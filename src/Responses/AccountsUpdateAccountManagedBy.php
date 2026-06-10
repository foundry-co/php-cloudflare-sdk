<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Parent container details
 */
readonly class AccountsUpdateAccountManagedBy
{
	public function __construct(
		/** ID of the parent Organization, if one exists */
		public ?string $parentOrgId = null,
		/** Name of the parent Organization, if one exists */
		public ?string $parentOrgName = null,
	) {
	}
}
