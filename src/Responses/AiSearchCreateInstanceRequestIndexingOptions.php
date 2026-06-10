<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AiSearchCreateInstanceRequestIndexingOptions
{
	public function __construct(
		/** Tokenizer used for keyword search indexing. porter provides word-level tokenization with Porter stemming (good for natural language queries). trigram enables character-level substring matching (good for partial matches, code, identifiers). Changing this triggers a full re-index. Defaults to porter. */
		public ?\FoundryCo\Cloudflare\Enums\AiSearchCreateInstanceRequestIndexingOptionsKeywordTokenizer $keywordTokenizer = null,
	) {
	}
}
