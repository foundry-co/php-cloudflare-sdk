<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update Account
 */
readonly class AccountsUpdateAccountRequest
{
	public function __construct(
		/** Identifier */
		public string $id,
		/** Account name */
		public string $name,
		public \FoundryCo\Cloudflare\Enums\AccountsUpdateAccountRequestType $type,
		/** Timestamp for the creation of the account */
		public ?\DateTimeImmutable $createdOn = null,
		/** Parent container details */
		public ?\FoundryCo\Cloudflare\Responses\AccountsUpdateAccountRequestManagedBy $managedBy = null,
		/** Account settings */
		public ?\FoundryCo\Cloudflare\Responses\AccountsUpdateAccountRequestSettings $settings = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'id' => $this->id,
		    'name' => $this->name,
		    'type' => $this->type->value,
		    'created_on' => $this->createdOn?->format(\DateTimeImmutable::ATOM),
		    'managed_by' => $this->managedBy?->toArray(),
		    'settings' => $this->settings?->toArray(),
		], fn ($v) => $v !== null);
	}
}
