<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SecretsStoreId
{
	public function __construct(
		/** Whenthe secret was created. */
		public \DateTimeImmutable $created,
		/** Store Identifier */
		public string $id,
		/** When the secret was modified. */
		public \DateTimeImmutable $modified,
		/** The name of the store */
		public string $name,
		/** Account Identifier */
		public ?string $accountId = null,
	) {
	}
}
