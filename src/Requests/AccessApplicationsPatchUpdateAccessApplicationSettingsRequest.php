<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update Access application settings
 */
readonly class AccessApplicationsPatchUpdateAccessApplicationSettingsRequest
{
	public function __construct(
		/** Enables loading application content in an iFrame. */
		public ?bool $allowIframe = null,
		/** Enables automatic authentication through cloudflared. */
		public ?bool $skipInterstitial = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'allow_iframe' => $this->allowIframe,
		    'skip_interstitial' => $this->skipInterstitial,
		], fn ($v) => $v !== null);
	}
}
