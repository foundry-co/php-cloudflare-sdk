<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PutPresetsPresetIdRequestUiDesignTokens
{
	public function __construct(
		public ?\FoundryCo\Cloudflare\Enums\PutPresetsPresetIdRequestUiDesignTokensBorderRadius $borderRadius = null,
		public ?\FoundryCo\Cloudflare\Enums\PutPresetsPresetIdRequestUiDesignTokensBorderWidth $borderWidth = null,
		public ?PutPresetsPresetIdRequestUiDesignTokensColors $colors = null,
		public ?float $spacingBase = null,
		public ?\FoundryCo\Cloudflare\Enums\PutPresetsPresetIdRequestUiDesignTokensTheme $theme = null,
		public ?string $fontFamily = null,
		public ?string $googleFont = null,
		public ?string $logo = null,
	) {
	}
}
