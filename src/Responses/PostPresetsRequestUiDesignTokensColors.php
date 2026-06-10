<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PostPresetsRequestUiDesignTokensColors
{
	public function __construct(
		public ?PostPresetsRequestUiDesignTokensColorsBackground $background = null,
		public ?PostPresetsRequestUiDesignTokensColorsBrand $brand = null,
		public ?string $danger = null,
		public ?string $text = null,
		public ?string $textOnBrand = null,
		public ?string $videoBg = null,
		public ?string $warning = null,
	) {
	}
}
