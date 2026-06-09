<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UserAPITokensTokens
{
	public function __construct(
		public ?UserAPITokensTokensCondition $condition = null,
		/** The expiration time on or after which the JWT MUST NOT be accepted for processing. */
		public ?\DateTimeImmutable $expiresOn = null,
		/** Token identifier tag. */
		public ?string $id = null,
		/** The time on which the token was created. */
		public ?\DateTimeImmutable $issuedOn = null,
		/** Last time the token was used. */
		public ?\DateTimeImmutable $lastUsedOn = null,
		/** Last time the token was modified. */
		public ?\DateTimeImmutable $modifiedOn = null,
		/** Token name. */
		public ?string $name = null,
		/** The time before which the token MUST NOT be accepted for processing. */
		public ?\DateTimeImmutable $notBefore = null,
		/** List of access policies assigned to the token. */
		public ?array $policies = null,
		/** Status of the token. */
		public ?\FoundryCo\Cloudflare\Enums\UserAPITokensTokensStatus $status = null,
	) {
	}
}
