<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarBotsBotsBotsItem
{
	public function __construct(
		/** The category of the bot. */
		public string $category,
		/** A summary for the bot (e.g., purpose). */
		public string $description,
		/** The kind of the bot. */
		public string $kind,
		/** The name of the bot. */
		public string $name,
		/** The organization that owns and operates the bot. */
		public string $operator,
		/** A kebab-case identifier derived from the bot name. */
		public string $slug,
		public array $userAgentPatterns,
	) {
	}
}
