<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a preview token
 */
readonly class CustomPagesForAnAccountCreatePreviewTokenRequest
{
	public function __construct(
		/** The preview action type. Required for request parsing but not used in token generation. Typically set to "preview". */
		public string $act,
		/** The target custom page type to preview (e.g. "block:waf"). Encoded as the "endpoint" claim in the resulting JWT. */
		public string $target,
		/** The URL of the custom page content to preview. Encoded as the "zone" claim in the resulting JWT. */
		public string $url,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'act' => $this->act,
		    'target' => $this->target,
		    'url' => $this->url,
		], fn ($v) => $v !== null);
	}
}
