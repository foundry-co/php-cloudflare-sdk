<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update takedown notice
 */
readonly class PutTakedownNoticeUpdateRequest
{
	public function __construct(
		public ?string $domain = null,
		public ?int $matchId = null,
		public ?\FoundryCo\Cloudflare\Enums\PutTakedownNoticeUpdateRequestMatchType $matchType = null,
		public ?int $queryId = null,
		public ?\FoundryCo\Cloudflare\Enums\PutTakedownNoticeUpdateRequestStatus $status = null,
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
