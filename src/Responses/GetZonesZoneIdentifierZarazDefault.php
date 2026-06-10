<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class GetZonesZoneIdentifierZarazDefault
{
	public function __construct(
		/** Data layer compatibility mode enabled. */
		public ?bool $dataLayer = null,
		/** The key for Zaraz debug mode. */
		public ?string $debugKey = null,
		/** General Zaraz settings. */
		public ?GetZonesZoneIdentifierZarazDefaultSettings $settings = null,
		/** Triggers set up under Zaraz configuration, where key is the trigger alpha-numeric ID and value is the trigger configuration. */
		public ?array $triggers = null,
		/** Variables set up under Zaraz configuration, where key is the variable alpha-numeric ID and value is the variable configuration. Values of variables of type secret are not included. */
		public ?array $variables = null,
		/** Zaraz internal version of the config. */
		public ?int $zarazVersion = null,
		/** Tools set up under Zaraz configuration, where key is the alpha-numeric tool ID and value is the tool configuration object. */
		public ?array $tools = null,
		/** Cloudflare Monitoring settings. */
		public ?GetZonesZoneIdentifierZarazDefaultAnalytics $analytics = null,
		/** Consent management configuration. */
		public ?GetZonesZoneIdentifierZarazDefaultConsent $consent = null,
		/** Single Page Application support enabled. */
		public ?bool $historyChange = null,
	) {
	}
}
