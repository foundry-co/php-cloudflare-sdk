<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetBotDetailsBot
{
	public function __construct(
		/** The category of the bot. */
		public ?string $category = null,
		/** A summary for the bot (e.g., purpose). */
		public ?string $description = null,
		/** The kind of the bot. */
		public ?string $kind = null,
		/** The name of the bot. */
		public ?string $name = null,
		/** The organization that owns and operates the bot. */
		public ?string $operator = null,
		/** The link to the bot documentation. */
		public ?string $operatorUrl = null,
		/** A kebab-case identifier derived from the bot name. */
		public ?string $slug = null,
		public ?array $userAgentPatterns = null,
		public ?array $userAgents = null,
		/** The URL of the agent's [Web Bot Auth](https://blog.cloudflare.com/web-bot-auth/) resource. Null for bots not verified via request signature. */
		public ?string $signatureAgentUrl = null,
	) {
	}
}
