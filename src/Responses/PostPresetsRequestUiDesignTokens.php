<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PostPresetsRequestUiDesignTokens
{
	public function __construct(
		public \FoundryCo\Cloudflare\Enums\PostPresetsRequestUiDesignTokensBorderRadius $borderRadius,
		public \FoundryCo\Cloudflare\Enums\PostPresetsRequestUiDesignTokensBorderWidth $borderWidth,
		public PostPresetsRequestUiDesignTokensColors $colors,
		public float $spacingBase,
		public \FoundryCo\Cloudflare\Enums\PostPresetsRequestUiDesignTokensTheme $theme,
		public ?string $fontFamily = null,
		public ?string $googleFont = null,
		public ?string $logo = null,
	) {
	}
}
