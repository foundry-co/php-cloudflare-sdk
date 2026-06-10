<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Specify account settings.
 */
readonly class ZeroTrustAccountsUpdateZeroTrustAccountConfigurationSettings
{
	public function __construct(
		/** Specify activity log settings. */
		public ?ZeroTrustAccountsUpdateZeroTrustAccountConfigurationSettingsActivityLog $activityLog = null,
		/** Specify anti-virus settings. */
		public ?ZeroTrustAccountsUpdateZeroTrustAccountConfigurationSettingsAntivirus $antivirus = null,
		/** Specify block page layout settings. */
		public ?ZeroTrustAccountsUpdateZeroTrustAccountConfigurationSettingsBlockPage $blockPage = null,
		/** Specify the DLP inspection mode. */
		public ?ZeroTrustAccountsUpdateZeroTrustAccountConfigurationSettingsBodyScanning $bodyScanning = null,
		/** Specify Clientless Browser Isolation settings. */
		public ?ZeroTrustAccountsUpdateZeroTrustAccountConfigurationSettingsBrowserIsolation $browserIsolation = null,
		/** Specify certificate settings for Gateway TLS interception. If unset, the Cloudflare Root CA handles interception. */
		public ?ZeroTrustAccountsUpdateZeroTrustAccountConfigurationSettingsCertificate $certificate = null,
		/** Specify custom certificate settings for BYO-PKI. This field is deprecated; use `certificate` instead. */
		public ?ZeroTrustAccountsUpdateZeroTrustAccountConfigurationSettingsCustomCertificate $customCertificate = null,
		/** Configures user email settings for firewall policies. When you enable this, the system standardizes email addresses in the identity portion of the rule to match extended email variants in firewall policies. When you disable this setting, the system matches email addresses exactly as you provide them. Enable this setting if your email uses `.` or `+` modifiers. */
		public ?ZeroTrustAccountsUpdateZeroTrustAccountConfigurationSettingsExtendedEmailMatching $extendedEmailMatching = null,
		/** Specify FIPS settings. */
		public ?ZeroTrustAccountsUpdateZeroTrustAccountConfigurationSettingsFips $fips = null,
		/** Enable host selection in egress policies. */
		public ?ZeroTrustAccountsUpdateZeroTrustAccountConfigurationSettingsHostSelector $hostSelector = null,
		/** Define the proxy inspection mode. */
		public ?ZeroTrustAccountsUpdateZeroTrustAccountConfigurationSettingsInspection $inspection = null,
		/** Specify whether to detect protocols from the initial bytes of client traffic. */
		public ?ZeroTrustAccountsUpdateZeroTrustAccountConfigurationSettingsProtocolDetection $protocolDetection = null,
		/** Specify whether to enable the sandbox. */
		public ?ZeroTrustAccountsUpdateZeroTrustAccountConfigurationSettingsSandbox $sandbox = null,
		/** Specify whether to inspect encrypted HTTP traffic. */
		public ?ZeroTrustAccountsUpdateZeroTrustAccountConfigurationSettingsTlsDecrypt $tlsDecrypt = null,
	) {
	}
}
