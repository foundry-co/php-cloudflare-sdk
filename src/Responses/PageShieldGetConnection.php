<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PageShieldGetConnection
{
	public function __construct(
		public ?\DateTimeImmutable $addedAt = null,
		public ?\DateTimeImmutable $firstSeenAt = null,
		public ?string $host = null,
		/** Identifier */
		public ?string $id = null,
		public ?\DateTimeImmutable $lastSeenAt = null,
		public ?string $url = null,
		public ?bool $urlContainsCdnCgiPath = null,
		public ?bool $domainReportedMalicious = null,
		public ?string $firstPageUrl = null,
		public ?array $maliciousDomainCategories = null,
		public ?array $maliciousUrlCategories = null,
		public ?array $pageUrls = null,
		public ?bool $urlReportedMalicious = null,
	) {
	}
}
