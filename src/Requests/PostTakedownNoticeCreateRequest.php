<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create takedown notice
 */
readonly class PostTakedownNoticeCreateRequest
{
	public function __construct(
		public string $domain,
		public ?int $matchId = null,
		public ?\FoundryCo\Cloudflare\Enums\PostTakedownNoticeCreateRequestMatchType $matchType = null,
		public ?int $queryId = null,
		public ?\FoundryCo\Cloudflare\Enums\PostTakedownNoticeCreateRequestStatus $status = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'domain' => $this->domain,
		    'matchId' => $this->matchId,
		    'matchType' => $this->matchType?->value,
		    'queryId' => $this->queryId,
		    'status' => $this->status?->value,
		], fn ($v) => $v !== null);
	}
}
