<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create Token
 */
readonly class UserApiTokensCreateTokenRequest
{
	public function __construct(
		/** Token name. */
		public string $name,
		/** List of access policies assigned to the token. */
		public array $policies,
		public ?\FoundryCo\Cloudflare\Responses\UserApiTokensCreateTokenRequestCondition $condition = null,
		/** The expiration time on or after which the JWT MUST NOT be accepted for processing. */
		public ?\DateTimeImmutable $expiresOn = null,
		/** The time before which the token MUST NOT be accepted for processing. */
		public ?\DateTimeImmutable $notBefore = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'policies' => $this->policies,
		    'condition' => $this->condition?->toArray(),
		    'expires_on' => $this->expiresOn?->format(\DateTimeImmutable::ATOM),
		    'not_before' => $this->notBefore?->format(\DateTimeImmutable::ATOM),
		], fn ($v) => $v !== null);
	}
}
