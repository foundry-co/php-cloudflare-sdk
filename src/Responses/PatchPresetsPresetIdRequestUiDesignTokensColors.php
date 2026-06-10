<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PatchPresetsPresetIdRequestUiDesignTokensColors
{
	public function __construct(
		public ?PatchPresetsPresetIdRequestUiDesignTokensColorsBackground $background = null,
		public ?PatchPresetsPresetIdRequestUiDesignTokensColorsBrand $brand = null,
		public ?string $danger = null,
		public ?string $text = null,
		public ?string $textOnBrand = null,
		public ?string $videoBg = null,
		public ?string $warning = null,
	) {
	}
}
