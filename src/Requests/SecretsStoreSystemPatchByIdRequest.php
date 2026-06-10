<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Patch a secret (System)
 */
readonly class SecretsStoreSystemPatchByIdRequest
{
	public function __construct(
		/** Freeform text describing the secret */
		public ?string $comment = null,
		/** The list of services that can use this secret. */
		public ?array $scopes = null,
		/** The value of the secret. Maximum 64 KiB (65,536 bytes). Note that this is 'write only' - no API response will provide this value, it is only used to create/modify secrets. */
		public ?string $value = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'comment' => $this->comment,
		    'scopes' => $this->scopes,
		    'value' => $this->value,
		], fn ($v) => $v !== null);
	}
}
