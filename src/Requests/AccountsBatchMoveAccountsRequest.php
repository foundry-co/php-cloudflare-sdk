<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Batch move accounts
 */
readonly class AccountsBatchMoveAccountsRequest
{
	public function __construct(
		/** Move these accounts to the destination organization. */
		public array $accountIds,
		/** Move accounts to this organization ID. */
		public string $destinationOrganizationId,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'account_ids' => $this->accountIds,
		    'destination_organization_id' => $this->destinationOrganizationId,
		], fn ($v) => $v !== null);
	}
}
