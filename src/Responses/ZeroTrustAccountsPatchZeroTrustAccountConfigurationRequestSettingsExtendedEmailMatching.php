<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configures user email settings for firewall policies. When you enable this, the system standardizes email addresses in the identity portion of the rule to match extended email variants in firewall policies. When you disable this setting, the system matches email addresses exactly as you provide them. Enable this setting if your email uses `.` or `+` modifiers.
 */
readonly class ZeroTrustAccountsPatchZeroTrustAccountConfigurationRequestSettingsExtendedEmailMatching
{
	public function __construct(
		/** Specify whether to match all variants of user emails (with + or . modifiers) used as criteria in Firewall policies. */
		public ?bool $enabled = null,
		/** Indicate that this setting was shared via the Orgs API and read only for the current account. */
		public ?bool $readOnly = null,
		/** Indicate the account tag of the account that shared this setting. */
		public ?string $sourceAccount = null,
		/** Indicate the version number of the setting. */
		public ?int $version = null,
	) {
	}
}
