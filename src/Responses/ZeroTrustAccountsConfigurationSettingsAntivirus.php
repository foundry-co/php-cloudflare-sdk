<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Specify anti-virus settings.
 */
readonly class ZeroTrustAccountsConfigurationSettingsAntivirus
{
	public function __construct(
		public ?array $enabledDownloadPhase = null,
		public ?array $enabledUploadPhase = null,
		public ?array $failClosed = null,
		public ?array $notificationSettings = null,
	) {
	}
}
