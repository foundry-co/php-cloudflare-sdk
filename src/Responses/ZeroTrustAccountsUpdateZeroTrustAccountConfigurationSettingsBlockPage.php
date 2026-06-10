<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Specify block page layout settings.
 */
readonly class ZeroTrustAccountsUpdateZeroTrustAccountConfigurationSettingsBlockPage
{
	public function __construct(
		/** Specify the block page background color in `#rrggbb` format when the mode is customized_block_page. */
		public ?string $backgroundColor = null,
		/** Specify whether to enable the custom block page. */
		public ?bool $enabled = null,
		/** Specify the block page footer text when the mode is customized_block_page. */
		public ?string $footerText = null,
		/** Specify the block page header text when the mode is customized_block_page. */
		public ?string $headerText = null,
		/** Specify whether to append context to target_uri as query parameters. This applies only when the mode is redirect_uri. */
		public ?bool $includeContext = null,
		/** Specify the full URL to the logo file when the mode is customized_block_page. */
		public ?string $logoPath = null,
		/** Specify the admin email for users to contact when the mode is customized_block_page. */
		public ?string $mailtoAddress = null,
		/** Specify the subject line for emails created from the block page when the mode is customized_block_page. */
		public ?string $mailtoSubject = null,
		/** Specify whether to redirect users to a Cloudflare-hosted block page or a customer-provided URI. */
		public ?\FoundryCo\Cloudflare\Enums\ZeroTrustAccountsUpdateZeroTrustAccountConfigurationSettingsBlockPageMode $mode = null,
		/** Specify the block page title when the mode is customized_block_page. */
		public ?string $name = null,
		/** Indicate that this setting was shared via the Orgs API and read only for the current account. */
		public ?bool $readOnly = null,
		/** Indicate the account tag of the account that shared this setting. */
		public ?string $sourceAccount = null,
		/** Specify whether to suppress detailed information at the bottom of the block page when the mode is customized_block_page. */
		public ?bool $suppressFooter = null,
		/** Specify the URI to redirect users to when the mode is redirect_uri. */
		public ?string $targetUri = null,
		/** Indicate the version number of the setting. */
		public ?int $version = null,
	) {
	}
}
