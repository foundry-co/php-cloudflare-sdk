<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Lookup takedown notices by domains
 */
readonly class PostTakedownNoticeLookupRequest
{
	public function __construct(
		public array $domains,
		public ?int $queryId = null,
		public ?array $queryIds = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'domains' => $this->domains,
		    'queryId' => $this->queryId,
		    'queryIds' => $this->queryIds,
		], fn ($v) => $v !== null);
	}
}
