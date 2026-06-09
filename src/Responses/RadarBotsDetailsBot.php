<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarBotsDetailsBot
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
		/** The link to the bot documentation. */
		public string $operatorUrl,
		/** A kebab-case identifier derived from the bot name. */
		public string $slug,
		public array $userAgentPatterns,
		public array $userAgents,
		/** The URL of the agent's [Web Bot Auth](https://blog.cloudflare.com/web-bot-auth/) resource. Null for bots not verified via request signature. */
		public ?string $signatureAgentUrl = null,
	) {
	}
}
