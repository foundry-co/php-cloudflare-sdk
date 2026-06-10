<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configure the message the user's device shows during an antivirus scan.
 */
readonly class ZeroTrustAccountsUpdateZeroTrustAccountConfigurationRequestSettingsAntivirusNotificationSettings
{
	public function __construct(
		/** Specify whether to enable notifications. */
		public ?bool $enabled = null,
		/** Specify whether to include context information as query parameters. */
		public ?bool $includeContext = null,
		/** Specify the message to show in the notification. */
		public ?string $msg = null,
		/** Specify a URL that directs users to more information. If unset, the notification opens a block page. */
		public ?string $supportUrl = null,
	) {
	}
}
