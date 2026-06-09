<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Duplicate secret (System)
 */
readonly class SecretsStoreSystemDuplicateByIdRequest
{
	public function __construct(
		/** The name of the secret */
		public string $name,
		/** The list of services that can use this secret. */
		public array $scopes,
		/** Freeform text describing the secret */
		public ?string $comment = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'scopes' => $this->scopes,
		    'comment' => $this->comment,
		], fn ($v) => $v !== null);
	}
}
