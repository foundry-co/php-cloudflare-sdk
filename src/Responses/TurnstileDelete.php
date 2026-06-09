<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A Turnstile widget's detailed configuration
 */
readonly class TurnstileDelete
{
	public function __construct(
		/**
		 * If bot_fight_mode is set to `true`, Cloudflare issues computationally
		 * expensive challenges in response to malicious bots (ENT only).
		 */
		public bool $botFightMode,
		/**
		 * If Turnstile is embedded on a Cloudflare site and the widget should grant challenge clearance,
		 * this setting can determine the clearance level to be set
		 */
		public \FoundryCo\Cloudflare\Enums\TurnstileDeleteClearanceLevel $clearanceLevel,
		/** When the widget was created. */
		public \DateTimeImmutable $createdOn,
		public array $domains,
		/**
		 * Return the Ephemeral ID in /siteverify (ENT only).
		 */
		public bool $ephemeralId,
		/** Widget Mode */
		public \FoundryCo\Cloudflare\Enums\TurnstileDeleteMode $mode,
		/** When the widget was modified. */
		public \DateTimeImmutable $modifiedOn,
		/**
		 * Human readable widget name. Not unique. Cloudflare suggests that you
		 * set this to a meaningful string to make it easier to identify your
		 * widget, and where it is used.
		 */
		public string $name,
		/**
		 * Do not show any Cloudflare branding on the widget (ENT only).
		 */
		public bool $offlabel,
		/**
		 * Region where this widget can be used. This cannot be changed after creation.
		 */
		public \FoundryCo\Cloudflare\Enums\TurnstileDeleteRegion $region,
		/** Secret key for this widget. */
		public string $secret,
		/** Widget item identifier tag. */
		public string $sitekey,
	) {
	}
}
