<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccountApiTokensVerifyToken
{
	public function __construct(
		/** Token identifier tag. */
		public ?string $id = null,
		/** Status of the token. */
		public ?\FoundryCo\Cloudflare\Enums\AccountApiTokensVerifyTokenStatus $status = null,
		/** The expiration time on or after which the JWT MUST NOT be accepted for processing. */
		public ?\DateTimeImmutable $expiresOn = null,
		/** The time before which the token MUST NOT be accepted for processing. */
		public ?\DateTimeImmutable $notBefore = null,
	) {
	}
}
