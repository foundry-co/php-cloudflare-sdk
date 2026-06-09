<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Controls which storage backends are used during indexing. Defaults to vector-only.
 */
readonly class AiSearchCreateInstanceRequestIndexMethod
{
	public function __construct(
		/** Enable keyword (BM25) storage backend. */
		public bool $keyword,
		/** Enable vector (embedding) storage backend. */
		public bool $vector,
	) {
	}
}
