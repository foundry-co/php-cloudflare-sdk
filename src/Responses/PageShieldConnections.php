<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PageShieldConnections
{
	public function __construct(
		public \DateTimeImmutable $addedAt,
		public \DateTimeImmutable $firstSeenAt,
		public string $host,
		/** Identifier */
		public string $id,
		public \DateTimeImmutable $lastSeenAt,
		public string $url,
		public bool $urlContainsCdnCgiPath,
		public ?bool $domainReportedMalicious = null,
		public ?string $firstPageUrl = null,
		public ?array $maliciousDomainCategories = null,
		public ?array $maliciousUrlCategories = null,
		public ?array $pageUrls = null,
		public ?bool $urlReportedMalicious = null,
	) {
	}
}
