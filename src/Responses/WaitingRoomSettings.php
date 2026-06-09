<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WaitingRoomSettings
{
	public function __construct(
		/**
		 * Whether to allow verified search engine crawlers to bypass all waiting rooms on this zone.
		 * Verified search engine crawlers will not be tracked or counted by the waiting room system,
		 * and will not appear in waiting room analytics.
		 */
		public bool $searchEngineCrawlerBypass,
	) {
	}
}
