<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create Vectorize Index (Deprecated)
 */
readonly class VectorizeDeprecatedCreateVectorizeIndexRequest
{
	public function __construct(
		public mixed $config,
		public string $name,
		/** Specifies the description of the index. */
		public ?string $description = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'config' => $this->config,
		    'name' => $this->name,
		    'description' => $this->description,
		], fn ($v) => $v !== null);
	}
}
