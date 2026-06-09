<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create Miscategorization
 */
readonly class MiscategorizationCreateMiscategorizationRequest
{
	public function __construct(
		/** Content category IDs to add. */
		public ?array $contentAdds = null,
		/** Content category IDs to remove. */
		public ?array $contentRemoves = null,
		public ?\FoundryCo\Cloudflare\Enums\MiscategorizationCreateMiscategorizationRequestIndicatorType $indicatorType = null,
		/** Provide only if indicator_type is `ipv4` or `ipv6`. */
		public ?string $ip = null,
		/** Security category IDs to add. */
		public ?array $securityAdds = null,
		/** Security category IDs to remove. */
		public ?array $securityRemoves = null,
		/** Provide only if indicator_type is `domain` or `url`. Example if indicator_type is `domain`: `example.com`. Example if indicator_type is `url`: `https://example.com/news/`. */
		public ?string $url = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'content_adds' => $this->contentAdds,
		    'content_removes' => $this->contentRemoves,
		    'indicator_type' => $this->indicatorType?->value,
		    'ip' => $this->ip,
		    'security_adds' => $this->securityAdds,
		    'security_removes' => $this->securityRemoves,
		    'url' => $this->url,
		], fn ($v) => $v !== null);
	}
}
