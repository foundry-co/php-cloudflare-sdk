<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZoneCacheSettingsGetCacheReserveClear
{
	public function __construct(
		/** Identifier of the zone setting. */
		public ?string $id = null,
		/** The time that the latest Cache Reserve Clear operation started. */
		public ?\DateTimeImmutable $startTs = null,
		/** The current state of the Cache Reserve Clear operation. */
		public ?\FoundryCo\Cloudflare\Enums\ZoneCacheSettingsGetCacheReserveClearState $state = null,
		/** Last time this setting was modified. */
		public ?\DateTimeImmutable $modifiedOn = null,
		/** The time that the latest Cache Reserve Clear operation completed. */
		public ?\DateTimeImmutable $endTs = null,
	) {
	}
}
