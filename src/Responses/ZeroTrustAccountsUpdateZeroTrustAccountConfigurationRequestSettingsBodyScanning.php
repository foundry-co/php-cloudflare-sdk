<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Specify the DLP inspection mode.
 */
readonly class ZeroTrustAccountsUpdateZeroTrustAccountConfigurationRequestSettingsBodyScanning
{
	public function __construct(
		/** Specify the inspection mode as either `deep` or `shallow`. */
		public ?\FoundryCo\Cloudflare\Enums\ZeroTrustAccountsUpdateZeroTrustAccountConfigurationRequestSettingsBodyScanningInspectionMode $inspectionMode = null,
	) {
	}
}
