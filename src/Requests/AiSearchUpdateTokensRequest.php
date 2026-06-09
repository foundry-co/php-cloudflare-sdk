<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update token.
 */
readonly class AiSearchUpdateTokensRequest
{
	public function __construct(
		public string $cfApiId,
		public string $cfApiKey,
		public string $name,
		public ?bool $legacy = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'cf_api_id' => $this->cfApiId,
		    'cf_api_key' => $this->cfApiKey,
		    'name' => $this->name,
		    'legacy' => $this->legacy,
		], fn ($v) => $v !== null);
	}
}
