<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZarazDefault
{
	public function __construct(
		/** Data layer compatibility mode enabled. */
		public bool $dataLayer,
		/** The key for Zaraz debug mode. */
		public string $debugKey,
		/** General Zaraz settings. */
		public ZarazDefaultSettings $settings,
		/** Triggers set up under Zaraz configuration, where key is the trigger alpha-numeric ID and value is the trigger configuration. */
		public array $triggers,
		/** Variables set up under Zaraz configuration, where key is the variable alpha-numeric ID and value is the variable configuration. Values of variables of type secret are not included. */
		public array $variables,
		/** Zaraz internal version of the config. */
		public int $zarazVersion,
		/** Tools set up under Zaraz configuration, where key is the alpha-numeric tool ID and value is the tool configuration object. */
		public array $tools,
		/** Cloudflare Monitoring settings. */
		public ?ZarazDefaultAnalytics $analytics = null,
		/** Consent management configuration. */
		public ?ZarazDefaultConsent $consent = null,
		/** Single Page Application support enabled. */
		public ?bool $historyChange = null,
	) {
	}
}
