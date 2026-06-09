<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Rotate a service token
 */
readonly class AccessServiceTokensRotateAServiceTokenRequest
{
	public function __construct(
		/** The expiration of the previous `client_secret`. If not provided, it defaults to the current timestamp in order to immediately expire the previous secret. */
		public ?\DateTimeImmutable $previousClientSecretExpiresAt = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'previous_client_secret_expires_at' => $this->previousClientSecretExpiresAt?->format(\DateTimeImmutable::ATOM),
		], fn ($v) => $v !== null);
	}
}
