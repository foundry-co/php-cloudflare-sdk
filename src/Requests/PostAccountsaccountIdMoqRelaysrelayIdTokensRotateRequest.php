<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Rotate a token
 */
readonly class PostAccountsaccountIdMoqRelaysrelayIdTokensRotateRequest
{
	public function __construct(
		/** Which token type to rotate. */
		public \FoundryCo\Cloudflare\Enums\PostAccountsaccountIdMoqRelaysrelayIdTokensRotateRequestType $type,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'type' => $this->type->value,
		], fn ($v) => $v !== null);
	}
}
