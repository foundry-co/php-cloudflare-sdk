<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create account email suppression
 */
readonly class PostPublicNewSuppressionSendingRequest
{
	public function __construct(
		public string $email,
		public ?\DateTimeImmutable $expiresAt = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'email' => $this->email,
		    'expires_at' => $this->expiresAt?->format(\DateTimeImmutable::ATOM),
		], fn ($v) => $v !== null);
	}
}
