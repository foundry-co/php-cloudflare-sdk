<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Execute @cf/google/nonomni-embeddinggemma-300m model.
 */
readonly class WorkersAiPostRunCfGoogleNonomniEmbeddinggemma300mRequest
{
	public function __construct(
		/** Input text to embed. Can be a single string or a list of strings. */
		public mixed $text,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'text' => $this->text,
		], fn ($v) => $v !== null);
	}
}
