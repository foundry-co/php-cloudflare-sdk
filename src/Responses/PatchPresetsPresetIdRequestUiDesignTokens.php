<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PatchPresetsPresetIdRequestUiDesignTokens
{
	public function __construct(
		public ?\FoundryCo\Cloudflare\Enums\PatchPresetsPresetIdRequestUiDesignTokensBorderRadius $borderRadius = null,
		public ?\FoundryCo\Cloudflare\Enums\PatchPresetsPresetIdRequestUiDesignTokensBorderWidth $borderWidth = null,
		public ?PatchPresetsPresetIdRequestUiDesignTokensColors $colors = null,
		public ?string $fontFamily = null,
		public ?string $googleFont = null,
		public ?string $logo = null,
		public ?float $spacingBase = null,
		public ?\FoundryCo\Cloudflare\Enums\PatchPresetsPresetIdRequestUiDesignTokensTheme $theme = null,
	) {
	}
}
