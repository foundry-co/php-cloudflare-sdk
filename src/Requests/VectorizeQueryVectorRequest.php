<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Query Vectors
 */
readonly class VectorizeQueryVectorRequest
{
	public function __construct(
		/** The search vector that will be used to find the nearest neighbors. */
		public array $vector,
		/** A metadata filter expression used to limit nearest neighbor results. */
		public ?array $filter = null,
		/** Whether to return no metadata, indexed metadata or all metadata associated with the closest vectors. */
		public ?\FoundryCo\Cloudflare\Enums\VectorizeQueryVectorRequestReturnMetadata $returnMetadata = null,
		/** Whether to return the values associated with the closest vectors. */
		public ?bool $returnValues = null,
		/** The number of nearest neighbors to find. */
		public ?float $topK = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'vector' => $this->vector,
		    'filter' => $this->filter,
		    'returnMetadata' => $this->returnMetadata?->value,
		    'returnValues' => $this->returnValues,
		    'topK' => $this->topK,
		], fn ($v) => $v !== null);
	}
}
