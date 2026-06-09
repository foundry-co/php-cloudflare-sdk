<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Specify account settings.
 */
readonly class ZeroTrustAccountsConfigurationSettings
{
	public function __construct(
		/** Specify activity log settings. */
		public ?ZeroTrustAccountsConfigurationSettingsActivityLog $activityLog = null,
		/** Specify anti-virus settings. */
		public ?ZeroTrustAccountsConfigurationSettingsAntivirus $antivirus = null,
		/** Specify block page layout settings. */
		public ?ZeroTrustAccountsConfigurationSettingsBlockPage $blockPage = null,
		/** Specify the DLP inspection mode. */
		public ?ZeroTrustAccountsConfigurationSettingsBodyScanning $bodyScanning = null,
		/** Specify Clientless Browser Isolation settings. */
		public ?ZeroTrustAccountsConfigurationSettingsBrowserIsolation $browserIsolation = null,
		/** Specify certificate settings for Gateway TLS interception. If unset, the Cloudflare Root CA handles interception. */
		public ?ZeroTrustAccountsConfigurationSettingsCertificate $certificate = null,
		/** Specify custom certificate settings for BYO-PKI. This field is deprecated; use `certificate` instead. */
		public ?ZeroTrustAccountsConfigurationSettingsCustomCertificate $customCertificate = null,
		/** Configures user email settings for firewall policies. When you enable this, the system standardizes email addresses in the identity portion of the rule to match extended email variants in firewall policies. When you disable this setting, the system matches email addresses exactly as you provide them. Enable this setting if your email uses `.` or `+` modifiers. */
		public ?ZeroTrustAccountsConfigurationSettingsExtendedEmailMatching $extendedEmailMatching = null,
		/** Specify FIPS settings. */
		public ?ZeroTrustAccountsConfigurationSettingsFips $fips = null,
		/** Enable host selection in egress policies. */
		public ?ZeroTrustAccountsConfigurationSettingsHostSelector $hostSelector = null,
		/** Define the proxy inspection mode. */
		public ?ZeroTrustAccountsConfigurationSettingsInspection $inspection = null,
		/** Specify whether to detect protocols from the initial bytes of client traffic. */
		public ?ZeroTrustAccountsConfigurationSettingsProtocolDetection $protocolDetection = null,
		/** Specify whether to enable the sandbox. */
		public ?ZeroTrustAccountsConfigurationSettingsSandbox $sandbox = null,
		/** Specify whether to inspect encrypted HTTP traffic. */
		public ?ZeroTrustAccountsConfigurationSettingsTlsDecrypt $tlsDecrypt = null,
	) {
	}
}
