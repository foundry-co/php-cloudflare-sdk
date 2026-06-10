<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Full relay details (no tokens).
 */
readonly class PutAccountsaccountIdMoqRelaysrelayId
{
	public function __construct(
		/**
		 * origin_fallback and lingering_subscribe are mutually exclusive.
		 */
		public ?PutAccountsaccountIdMoqRelaysrelayIdConfig $config = null,
		public ?\DateTimeImmutable $created = null,
		public ?\DateTimeImmutable $modified = null,
		public ?string $name = null,
		public ?string $uid = null,
		/** "connected" when active, omitted otherwise. */
		public ?\FoundryCo\Cloudflare\Enums\PutAccountsaccountIdMoqRelaysrelayIdStatus $status = null,
	) {
	}
}
