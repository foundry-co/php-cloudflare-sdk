<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SecretsStoreSystemPatchById
{
	public function __construct(
		/** Whenthe secret was created. */
		public ?\DateTimeImmutable $created = null,
		/** Secret identifier tag. */
		public ?string $id = null,
		/** When the secret was modified. */
		public ?\DateTimeImmutable $modified = null,
		/** The name of the secret */
		public ?string $name = null,
		public ?\FoundryCo\Cloudflare\Enums\SecretsStoreSystemPatchByIdStatus $status = null,
		/** Store Identifier */
		public ?string $storeId = null,
		/** Freeform text describing the secret */
		public ?string $comment = null,
		/** The list of services that can use this secret. */
		public ?array $scopes = null,
	) {
	}
}
