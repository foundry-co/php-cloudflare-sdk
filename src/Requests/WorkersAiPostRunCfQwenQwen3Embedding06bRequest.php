<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Execute @cf/qwen/qwen3-embedding-0.6b model.
 */
readonly class WorkersAiPostRunCfQwenQwen3Embedding06bRequest
{
	public function __construct(
		public mixed $documents = null,
		/** Optional instruction for the task */
		public ?string $instruction = null,
		public mixed $queries = null,
		public mixed $text = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'documents' => $this->documents,
		    'instruction' => $this->instruction,
		    'queries' => $this->queries,
		    'text' => $this->text,
		], fn ($v) => $v !== null);
	}
}
