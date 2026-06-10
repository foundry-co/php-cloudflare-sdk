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
readonly class ZeroTrustAccountsPatchZeroTrustAccountConfigurationSettings
{
	public function __construct(
		/** Specify activity log settings. */
		public ?ZeroTrustAccountsPatchZeroTrustAccountConfigurationSettingsActivityLog $activityLog = null,
		/** Specify anti-virus settings. */
		public ?ZeroTrustAccountsPatchZeroTrustAccountConfigurationSettingsAntivirus $antivirus = null,
		/** Specify block page layout settings. */
		public ?ZeroTrustAccountsPatchZeroTrustAccountConfigurationSettingsBlockPage $blockPage = null,
		/** Specify the DLP inspection mode. */
		public ?ZeroTrustAccountsPatchZeroTrustAccountConfigurationSettingsBodyScanning $bodyScanning = null,
		/** Specify Clientless Browser Isolation settings. */
		public ?ZeroTrustAccountsPatchZeroTrustAccountConfigurationSettingsBrowserIsolation $browserIsolation = null,
		/** Specify certificate settings for Gateway TLS interception. If unset, the Cloudflare Root CA handles interception. */
		public ?ZeroTrustAccountsPatchZeroTrustAccountConfigurationSettingsCertificate $certificate = null,
		/** Specify custom certificate settings for BYO-PKI. This field is deprecated; use `certificate` instead. */
		public ?ZeroTrustAccountsPatchZeroTrustAccountConfigurationSettingsCustomCertificate $customCertificate = null,
		/** Configures user email settings for firewall policies. When you enable this, the system standardizes email addresses in the identity portion of the rule to match extended email variants in firewall policies. When you disable this setting, the system matches email addresses exactly as you provide them. Enable this setting if your email uses `.` or `+` modifiers. */
		public ?ZeroTrustAccountsPatchZeroTrustAccountConfigurationSettingsExtendedEmailMatching $extendedEmailMatching = null,
		/** Specify FIPS settings. */
		public ?ZeroTrustAccountsPatchZeroTrustAccountConfigurationSettingsFips $fips = null,
		/** Enable host selection in egress policies. */
		public ?ZeroTrustAccountsPatchZeroTrustAccountConfigurationSettingsHostSelector $hostSelector = null,
		/** Define the proxy inspection mode. */
		public ?ZeroTrustAccountsPatchZeroTrustAccountConfigurationSettingsInspection $inspection = null,
		/** Specify whether to detect protocols from the initial bytes of client traffic. */
		public ?ZeroTrustAccountsPatchZeroTrustAccountConfigurationSettingsProtocolDetection $protocolDetection = null,
		/** Specify whether to enable the sandbox. */
		public ?ZeroTrustAccountsPatchZeroTrustAccountConfigurationSettingsSandbox $sandbox = null,
		/** Specify whether to inspect encrypted HTTP traffic. */
		public ?ZeroTrustAccountsPatchZeroTrustAccountConfigurationSettingsTlsDecrypt $tlsDecrypt = null,
	) {
	}
}
