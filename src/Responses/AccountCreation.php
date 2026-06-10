<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccountCreation
{
	public function __construct(
		/** Identifier */
		public ?string $id = null,
		/** Account name */
		public ?string $name = null,
		public ?\FoundryCo\Cloudflare\Enums\AccountCreationType $type = null,
		/** Timestamp for the creation of the account */
		public ?\DateTimeImmutable $createdOn = null,
		/** Parent container details */
		public ?AccountCreationManagedBy $managedBy = null,
		/** Account settings */
		public ?AccountCreationSettings $settings = null,
	) {
	}
}
