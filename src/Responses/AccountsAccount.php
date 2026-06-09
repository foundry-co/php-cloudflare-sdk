<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccountsAccount
{
	public function __construct(
		/** Identifier */
		public string $id,
		/** Account name */
		public string $name,
		public \FoundryCo\Cloudflare\Enums\AccountsAccountType $type,
		/** Timestamp for the creation of the account */
		public ?\DateTimeImmutable $createdOn = null,
		/** Parent container details */
		public ?AccountsAccountManagedBy $managedBy = null,
		/** Account settings */
		public ?AccountsAccountSettings $settings = null,
	) {
	}
}
