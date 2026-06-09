<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PageShieldCookies
{
	public function __construct(
		public \DateTimeImmutable $firstSeenAt,
		public string $host,
		/** Identifier */
		public string $id,
		public \DateTimeImmutable $lastSeenAt,
		public string $name,
		public \FoundryCo\Cloudflare\Enums\PageShieldCookiesType $type,
		public ?string $domainAttribute = null,
		public ?\DateTimeImmutable $expiresAttribute = null,
		public ?bool $httpOnlyAttribute = null,
		public ?int $maxAgeAttribute = null,
		public ?array $pageUrls = null,
		public ?string $pathAttribute = null,
		public ?\FoundryCo\Cloudflare\Enums\PageShieldCookiesSameSiteAttribute $sameSiteAttribute = null,
		public ?bool $secureAttribute = null,
	) {
	}
}
