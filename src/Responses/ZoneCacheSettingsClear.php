<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZoneCacheSettingsClear
{
	public function __construct(
		/** The time that the latest Cache Reserve Clear operation started. */
		public \DateTimeImmutable $startTs,
		/** The current state of the Cache Reserve Clear operation. */
		public \FoundryCo\Cloudflare\Enums\ZoneCacheSettingsClearState $state,
		/** The time that the latest Cache Reserve Clear operation completed. */
		public ?\DateTimeImmutable $endTs = null,
	) {
	}
}
