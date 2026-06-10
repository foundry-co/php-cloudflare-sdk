<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PageShieldGetCookie
{
	public function __construct(
		public ?\DateTimeImmutable $firstSeenAt = null,
		public ?string $host = null,
		/** Identifier */
		public ?string $id = null,
		public ?\DateTimeImmutable $lastSeenAt = null,
		public ?string $name = null,
		public ?\FoundryCo\Cloudflare\Enums\PageShieldGetCookieType $type = null,
		public ?string $domainAttribute = null,
		public ?\DateTimeImmutable $expiresAttribute = null,
		public ?bool $httpOnlyAttribute = null,
		public ?int $maxAgeAttribute = null,
		public ?array $pageUrls = null,
		public ?string $pathAttribute = null,
		public ?\FoundryCo\Cloudflare\Enums\PageShieldGetCookieSameSiteAttribute $sameSiteAttribute = null,
		public ?bool $secureAttribute = null,
	) {
	}
}
