<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Specify anti-virus settings.
 */
readonly class ZeroTrustAccountsGetZeroTrustAccountConfigurationSettingsAntivirus
{
	public function __construct(
		/** Specify whether to enable anti-virus scanning on downloads. */
		public ?bool $enabledDownloadPhase = null,
		/** Specify whether to enable anti-virus scanning on uploads. */
		public ?bool $enabledUploadPhase = null,
		/** Specify whether to block requests for unscannable files. */
		public ?bool $failClosed = null,
		/** Configure the message the user's device shows during an antivirus scan. */
		public ?ZeroTrustAccountsGetZeroTrustAccountConfigurationSettingsAntivirusNotificationSettings $notificationSettings = null,
	) {
	}
}
