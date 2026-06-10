<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configure browser isolation behavior. Settable only for `http` rules with the action set to `isolate`.
 */
readonly class ZeroTrustGatewayRulesListZeroTrustGatewayRulesRuleSettingsBisoAdminControls
{
	public function __construct(
		/** Configure copy behavior. If set to remote_only, users cannot copy isolated content from the remote browser to the local clipboard. If this field is absent, copying remains enabled. Applies only when version == "v2". */
		public ?\FoundryCo\Cloudflare\Enums\ZeroTrustGatewayRulesListZeroTrustGatewayRulesRuleSettingsBisoAdminControlsCopy $copy = null,
		/** Set to false to enable copy-pasting. Only applies when `version == "v1"`. */
		public ?bool $dcp = null,
		/** Set to false to enable downloading. Only applies when `version == "v1"`. */
		public ?bool $dd = null,
		/** Set to false to enable keyboard usage. Only applies when `version == "v1"`. */
		public ?bool $dk = null,
		/** Configure download behavior. When set to remote_only, users can view downloads but cannot save them. If this field is absent, downloading remains enabled. Applies only when version == "v2". */
		public ?\FoundryCo\Cloudflare\Enums\ZeroTrustGatewayRulesListZeroTrustGatewayRulesRuleSettingsBisoAdminControlsDownload $download = null,
		/** Set to false to enable printing. Only applies when `version == "v1"`. */
		public ?bool $dp = null,
		/** Set to false to enable uploading. Only applies when `version == "v1"`. */
		public ?bool $du = null,
		/** Configure keyboard usage behavior. If this field is absent, keyboard usage remains enabled. Applies only when version == "v2". */
		public ?\FoundryCo\Cloudflare\Enums\ZeroTrustGatewayRulesListZeroTrustGatewayRulesRuleSettingsBisoAdminControlsKeyboard $keyboard = null,
		/** Configure paste behavior. If set to remote_only, users cannot paste content from the local clipboard into isolated pages. If this field is absent, pasting remains enabled. Applies only when version == "v2". */
		public ?\FoundryCo\Cloudflare\Enums\ZeroTrustGatewayRulesListZeroTrustGatewayRulesRuleSettingsBisoAdminControlsPaste $paste = null,
		/** Configure print behavior. Default, Printing is enabled. Applies only when version == "v2". */
		public ?\FoundryCo\Cloudflare\Enums\ZeroTrustGatewayRulesListZeroTrustGatewayRulesRuleSettingsBisoAdminControlsPrinting $printing = null,
		/** Configure upload behavior. If this field is absent, uploading remains enabled. Applies only when version == "v2". */
		public ?\FoundryCo\Cloudflare\Enums\ZeroTrustGatewayRulesListZeroTrustGatewayRulesRuleSettingsBisoAdminControlsUpload $upload = null,
		/** Indicate which version of the browser isolation controls should apply. */
		public ?\FoundryCo\Cloudflare\Enums\ZeroTrustGatewayRulesListZeroTrustGatewayRulesRuleSettingsBisoAdminControlsVersion $version = null,
		/** Specify the watermark ID (UUID) to apply to the isolated browser session. When present, enables watermark rendering in the isolated browser. */
		public ?string $wmId = null,
	) {
	}
}
