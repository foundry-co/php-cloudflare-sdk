<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create Vectorize Index
 */
readonly class VectorizeCreateVectorizeIndexRequest
{
	public function __construct(
		public \FoundryCo\Cloudflare\Responses\VectorizeCreateVectorizeIndexRequestConfig $config,
		public string $name,
		/** Specifies the description of the index. */
		public ?string $description = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'config' => $this->config->toArray(),
		    'name' => $this->name,
		    'description' => $this->description,
		], fn ($v) => $v !== null);
	}
}
