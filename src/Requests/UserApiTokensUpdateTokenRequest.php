<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update Token
 */
readonly class UserApiTokensUpdateTokenRequest
{
	public function __construct(
		/** Token name. */
		public string $name,
		/** List of access policies assigned to the token. */
		public array $policies,
		public ?\FoundryCo\Cloudflare\Responses\UserApiTokensUpdateTokenRequestCondition $condition = null,
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
		/** The time before which the token MUST NOT be accepted for processing. */
		public ?\DateTimeImmutable $notBefore = null,
		/** Status of the token. */
		public ?\FoundryCo\Cloudflare\Enums\UserApiTokensUpdateTokenRequestStatus $status = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'policies' => $this->policies,
		    'condition' => $this->condition?->toArray(),
		    'expires_on' => $this->expiresOn?->format(\DateTimeImmutable::ATOM),
		    'id' => $this->id,
		    'issued_on' => $this->issuedOn?->format(\DateTimeImmutable::ATOM),
		    'last_used_on' => $this->lastUsedOn?->format(\DateTimeImmutable::ATOM),
		    'modified_on' => $this->modifiedOn?->format(\DateTimeImmutable::ATOM),
		    'not_before' => $this->notBefore?->format(\DateTimeImmutable::ATOM),
		    'status' => $this->status?->value,
		], fn ($v) => $v !== null);
	}
}
