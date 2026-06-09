<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PageShieldScript
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
		/** The cryptomining score of the JavaScript content. */
		public ?int $cryptominingScore = null,
		public mixed $dataflowScore = null,
		public ?bool $domainReportedMalicious = null,
		/** The timestamp of when the script was last fetched. */
		public ?string $fetchedAt = null,
		public ?string $firstPageUrl = null,
		/** The computed hash of the analyzed script. */
		public ?string $hash = null,
		/** The integrity score of the JavaScript content. */
		public ?int $jsIntegrityScore = null,
		/** The magecart score of the JavaScript content. */
		public ?int $magecartScore = null,
		public ?array $maliciousDomainCategories = null,
		public ?array $maliciousUrlCategories = null,
		/** The malware score of the JavaScript content. */
		public ?int $malwareScore = null,
		public mixed $obfuscationScore = null,
		public ?array $pageUrls = null,
		public ?bool $urlReportedMalicious = null,
		public ?array $versions = null,
	) {
	}
}
