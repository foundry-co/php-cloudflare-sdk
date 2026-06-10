<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * General Zaraz settings.
 */
readonly class GetZonesZoneIdentifierZarazDefaultSettings
{
	public function __construct(
		/** Automatic injection of Zaraz scripts enabled. */
		public ?bool $autoInjectScript = null,
		/** Details of the worker that receives and edits Zaraz Context object. */
		public ?GetZonesZoneIdentifierZarazDefaultSettingsContextEnricher $contextEnricher = null,
		/** The domain Zaraz will use for writing and reading its cookies. */
		public ?string $cookieDomain = null,
		/** Ecommerce API enabled. */
		public ?bool $ecommerce = null,
		/** Custom endpoint for server-side track events. */
		public ?string $eventsApiPath = null,
		/** Hiding external referrer URL enabled. */
		public ?bool $hideExternalReferer = null,
		/** Trimming IP address enabled. */
		public ?bool $hideIPAddress = null,
		/** Removing URL query params enabled. */
		public ?bool $hideQueryParams = null,
		/** Removing sensitive data from User Agent string enabled. */
		public ?bool $hideUserAgent = null,
		/** Custom endpoint for Zaraz init script. */
		public ?string $initPath = null,
		/** Injection of Zaraz scripts into iframes enabled. */
		public ?bool $injectIframes = null,
		/** Custom path for Managed Components server functionalities. */
		public ?string $mcRootPath = null,
		/** Custom endpoint for Zaraz main script. */
		public ?string $scriptPath = null,
		/** Custom endpoint for Zaraz tracking requests. */
		public ?string $trackPath = null,
	) {
	}
}
