<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZoneLevelZeroTrustOrganizationUpdateYourZeroTrustOrganizationRequestLoginDesign
{
	public function __construct(
		/** The background color on your login page. */
		public ?string $backgroundColor = null,
		/** The text at the bottom of your login page. */
		public ?string $footerText = null,
		/** The text at the top of your login page. */
		public ?string $headerText = null,
		/** The URL of the logo on your login page. */
		public ?string $logoPath = null,
		/** The text color on your login page. */
		public ?string $textColor = null,
	) {
	}
}
