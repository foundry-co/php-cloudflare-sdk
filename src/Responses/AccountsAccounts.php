<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccountsAccounts
{
	public function __construct(
		/** Identifier */
		public string $id,
		/** Account name */
		public string $name,
		public \FoundryCo\Cloudflare\Enums\AccountsAccountsType $type,
		/** Timestamp for the creation of the account */
		public ?\DateTimeImmutable $createdOn = null,
		/** Parent container details */
		public ?AccountsAccountsManagedBy $managedBy = null,
		/** Account settings */
		public ?AccountsAccountsSettings $settings = null,
	) {
	}
}
