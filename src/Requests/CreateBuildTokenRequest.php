<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create build token
 */
readonly class CreateBuildTokenRequest
{
	public function __construct(
		public string $buildTokenName,
		public string $buildTokenSecret,
		public string $cloudflareTokenId,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'build_token_name' => $this->buildTokenName,
		    'build_token_secret' => $this->buildTokenSecret,
		    'cloudflare_token_id' => $this->cloudflareTokenId,
		], fn ($v) => $v !== null);
	}
}
