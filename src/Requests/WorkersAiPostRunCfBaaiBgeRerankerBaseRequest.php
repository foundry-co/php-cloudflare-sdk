<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Execute @cf/baai/bge-reranker-base model.
 */
readonly class WorkersAiPostRunCfBaaiBgeRerankerBaseRequest
{
	public function __construct(
		/** List of provided contexts. Note that the index in this array is important, as the response will refer to it. */
		public array $contexts,
		/** A query you wish to perform against the provided contexts. */
		public string $query,
		/** Number of returned results starting with the best score. */
		public ?int $topK = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'contexts' => $this->contexts,
		    'query' => $this->query,
		    'top_k' => $this->topK,
		], fn ($v) => $v !== null);
	}
}
