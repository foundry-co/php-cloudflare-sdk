<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Relay with auto-generated tokens (shown once).
 */
readonly class PostAccountsaccountIdMoqRelays
{
	public function __construct(
		/**
		 * origin_fallback and lingering_subscribe are mutually exclusive.
		 */
		public ?PostAccountsaccountIdMoqRelaysConfig $config = null,
		public ?\DateTimeImmutable $created = null,
		public ?\DateTimeImmutable $modified = null,
		public ?string $name = null,
		/** Full access token (publish + subscribe). Treat as sensitive. */
		public ?string $tokenPublishSubscribe = null,
		/** Subscribe-only token. Treat as sensitive. */
		public ?string $tokenSubscribe = null,
		/** Server-generated unique identifier (32 hex chars). */
		public ?string $uid = null,
	) {
	}
}
