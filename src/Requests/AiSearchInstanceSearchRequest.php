<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Search
 */
readonly class AiSearchInstanceSearchRequest
{
	public function __construct(
		public ?\FoundryCo\Cloudflare\Responses\AiSearchInstanceSearchRequestAiSearchOptions $aiSearchOptions = null,
		public ?array $messages = null,
		/** A simple text query string. Alternative to 'messages' — provide either this or 'messages', not both. */
		public ?string $query = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'ai_search_options' => $this->aiSearchOptions?->toArray(),
		    'messages' => $this->messages,
		    'query' => $this->query,
		], fn ($v) => $v !== null);
	}
}
