<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A Turnstile widget's detailed configuration
 */
readonly class AccountsTurnstileWidgetDelete
{
	public function __construct(
		/**
		 * If bot_fight_mode is set to `true`, Cloudflare issues computationally
		 * expensive challenges in response to malicious bots (ENT only).
		 */
		public ?bool $botFightMode = null,
		/**
		 * If Turnstile is embedded on a Cloudflare site and the widget should grant challenge clearance,
		 * this setting can determine the clearance level to be set
		 */
		public ?\FoundryCo\Cloudflare\Enums\AccountsTurnstileWidgetDeleteClearanceLevel $clearanceLevel = null,
		/** When the widget was created. */
		public ?\DateTimeImmutable $createdOn = null,
		public ?array $domains = null,
		/**
		 * Return the Ephemeral ID in /siteverify (ENT only).
		 */
		public ?bool $ephemeralId = null,
		/** Widget Mode */
		public ?\FoundryCo\Cloudflare\Enums\AccountsTurnstileWidgetDeleteMode $mode = null,
		/** When the widget was modified. */
		public ?\DateTimeImmutable $modifiedOn = null,
		/**
		 * Human readable widget name. Not unique. Cloudflare suggests that you
		 * set this to a meaningful string to make it easier to identify your
		 * widget, and where it is used.
		 */
		public ?string $name = null,
		/**
		 * Do not show any Cloudflare branding on the widget (ENT only).
		 */
		public ?bool $offlabel = null,
		/**
		 * Region where this widget can be used. This cannot be changed after creation.
		 */
		public ?\FoundryCo\Cloudflare\Enums\AccountsTurnstileWidgetDeleteRegion $region = null,
		/** Secret key for this widget. */
		public ?string $secret = null,
		/** Widget item identifier tag. */
		public ?string $sitekey = null,
	) {
	}
}
