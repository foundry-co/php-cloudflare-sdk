<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PostPresetsRequestUiDesignTokens
{
	public function __construct(
		public ?\FoundryCo\Cloudflare\Enums\PostPresetsRequestUiDesignTokensBorderRadius $borderRadius = null,
		public ?\FoundryCo\Cloudflare\Enums\PostPresetsRequestUiDesignTokensBorderWidth $borderWidth = null,
		public ?PostPresetsRequestUiDesignTokensColors $colors = null,
		public ?float $spacingBase = null,
		public ?\FoundryCo\Cloudflare\Enums\PostPresetsRequestUiDesignTokensTheme $theme = null,
		public ?string $fontFamily = null,
		public ?string $googleFont = null,
		public ?string $logo = null,
	) {
	}
}
