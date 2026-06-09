<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Full relay details (no tokens).
 */
readonly class MoQRelaysId
{
	public function __construct(
		/**
		 * origin_fallback and lingering_subscribe are mutually exclusive.
		 */
		public MoQRelaysIdConfig $config,
		public \DateTimeImmutable $created,
		public \DateTimeImmutable $modified,
		public string $name,
		public string $uid,
		/** "connected" when active, omitted otherwise. */
		public ?\FoundryCo\Cloudflare\Enums\MoQRelaysIdStatus $status = null,
	) {
	}
}
