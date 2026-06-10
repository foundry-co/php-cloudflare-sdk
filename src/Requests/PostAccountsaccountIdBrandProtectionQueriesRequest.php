<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create new saved string queries
 */
readonly class PostAccountsaccountIdBrandProtectionQueriesRequest
{
	public function __construct(
		public ?\DateTimeImmutable $maxTime = null,
		public ?\DateTimeImmutable $minTime = null,
		public ?bool $scan = null,
		public ?array $stringMatches = null,
		public ?string $tag = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'max_time' => $this->maxTime?->format(\DateTimeImmutable::ATOM),
		    'min_time' => $this->minTime?->format(\DateTimeImmutable::ATOM),
		    'scan' => $this->scan,
		    'string_matches' => $this->stringMatches,
		    'tag' => $this->tag,
		], fn ($v) => $v !== null);
	}
}
