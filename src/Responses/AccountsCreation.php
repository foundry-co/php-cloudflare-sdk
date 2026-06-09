<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccountsCreation
{
	public function __construct(
		/** Identifier */
		public string $id,
		/** Account name */
		public string $name,
		public \FoundryCo\Cloudflare\Enums\AccountsCreationType $type,
		/** Timestamp for the creation of the account */
		public ?\DateTimeImmutable $createdOn = null,
		/** Parent container details */
		public ?AccountsCreationManagedBy $managedBy = null,
		/** Account settings */
		public ?AccountsCreationSettings $settings = null,
	) {
	}
}
