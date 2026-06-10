<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a Turnstile Widget
 */
readonly class AccountsTurnstileWidgetUpdateRequest
{
	public function __construct(
		public array $domains,
		/** Widget Mode */
		public \FoundryCo\Cloudflare\Enums\AccountsTurnstileWidgetUpdateRequestMode $mode,
		/**
		 * Human readable widget name. Not unique. Cloudflare suggests that you
		 * set this to a meaningful string to make it easier to identify your
		 * widget, and where it is used.
		 */
		public string $name,
		/**
		 * If bot_fight_mode is set to `true`, Cloudflare issues computationally
		 * expensive challenges in response to malicious bots (ENT only).
		 */
		public ?bool $botFightMode = null,
		/**
		 * If Turnstile is embedded on a Cloudflare site and the widget should grant challenge clearance,
		 * this setting can determine the clearance level to be set
		 */
		public ?\FoundryCo\Cloudflare\Enums\AccountsTurnstileWidgetUpdateRequestClearanceLevel $clearanceLevel = null,
		/**
		 * Return the Ephemeral ID in /siteverify (ENT only).
		 */
		public ?bool $ephemeralId = null,
		/**
		 * Do not show any Cloudflare branding on the widget (ENT only).
		 */
		public ?bool $offlabel = null,
		/**
		 * Region where this widget can be used. This cannot be changed after creation.
		 */
		public ?\FoundryCo\Cloudflare\Enums\AccountsTurnstileWidgetUpdateRequestRegion $region = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'domains' => $this->domains,
		    'mode' => $this->mode->value,
		    'name' => $this->name,
		    'bot_fight_mode' => $this->botFightMode,
		    'clearance_level' => $this->clearanceLevel?->value,
		    'ephemeral_id' => $this->ephemeralId,
		    'offlabel' => $this->offlabel,
		    'region' => $this->region?->value,
		], fn ($v) => $v !== null);
	}
}
