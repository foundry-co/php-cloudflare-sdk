<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SecretsStoreList
{
	public function __construct(
		/** Whenthe secret was created. */
		public ?\DateTimeImmutable $created = null,
		/** Store Identifier */
		public ?string $id = null,
		/** When the secret was modified. */
		public ?\DateTimeImmutable $modified = null,
		/** The name of the store */
		public ?string $name = null,
		/** Account Identifier */
		public ?string $accountId = null,
	) {
	}
}
