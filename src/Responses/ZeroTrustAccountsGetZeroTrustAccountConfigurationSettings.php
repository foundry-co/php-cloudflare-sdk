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
readonly class ZeroTrustAccountsGetZeroTrustAccountConfigurationSettings
{
	public function __construct(
		/** Specify activity log settings. */
		public ?ZeroTrustAccountsGetZeroTrustAccountConfigurationSettingsActivityLog $activityLog = null,
		/** Specify anti-virus settings. */
		public ?ZeroTrustAccountsGetZeroTrustAccountConfigurationSettingsAntivirus $antivirus = null,
		/** Specify block page layout settings. */
		public ?ZeroTrustAccountsGetZeroTrustAccountConfigurationSettingsBlockPage $blockPage = null,
		/** Specify the DLP inspection mode. */
		public ?ZeroTrustAccountsGetZeroTrustAccountConfigurationSettingsBodyScanning $bodyScanning = null,
		/** Specify Clientless Browser Isolation settings. */
		public ?ZeroTrustAccountsGetZeroTrustAccountConfigurationSettingsBrowserIsolation $browserIsolation = null,
		/** Specify certificate settings for Gateway TLS interception. If unset, the Cloudflare Root CA handles interception. */
		public ?ZeroTrustAccountsGetZeroTrustAccountConfigurationSettingsCertificate $certificate = null,
		/** Specify custom certificate settings for BYO-PKI. This field is deprecated; use `certificate` instead. */
		public ?ZeroTrustAccountsGetZeroTrustAccountConfigurationSettingsCustomCertificate $customCertificate = null,
		/** Configures user email settings for firewall policies. When you enable this, the system standardizes email addresses in the identity portion of the rule to match extended email variants in firewall policies. When you disable this setting, the system matches email addresses exactly as you provide them. Enable this setting if your email uses `.` or `+` modifiers. */
		public ?ZeroTrustAccountsGetZeroTrustAccountConfigurationSettingsExtendedEmailMatching $extendedEmailMatching = null,
		/** Specify FIPS settings. */
		public ?ZeroTrustAccountsGetZeroTrustAccountConfigurationSettingsFips $fips = null,
		/** Enable host selection in egress policies. */
		public ?ZeroTrustAccountsGetZeroTrustAccountConfigurationSettingsHostSelector $hostSelector = null,
		/** Define the proxy inspection mode. */
		public ?ZeroTrustAccountsGetZeroTrustAccountConfigurationSettingsInspection $inspection = null,
		/** Specify whether to detect protocols from the initial bytes of client traffic. */
		public ?ZeroTrustAccountsGetZeroTrustAccountConfigurationSettingsProtocolDetection $protocolDetection = null,
		/** Specify whether to enable the sandbox. */
		public ?ZeroTrustAccountsGetZeroTrustAccountConfigurationSettingsSandbox $sandbox = null,
		/** Specify whether to inspect encrypted HTTP traffic. */
		public ?ZeroTrustAccountsGetZeroTrustAccountConfigurationSettingsTlsDecrypt $tlsDecrypt = null,
	) {
	}
}
