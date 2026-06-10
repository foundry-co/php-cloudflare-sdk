<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create Stream
 */
readonly class PostV4AccountsByAccountIdPipelinesV1StreamsRequest
{
	public function __construct(
		/** Specifies the name of the Stream. */
		public string $name,
		public mixed $format = null,
		public ?\FoundryCo\Cloudflare\Responses\PostV4AccountsByAccountIdPipelinesV1StreamsRequestHttp $http = null,
		public ?\FoundryCo\Cloudflare\Responses\PostV4AccountsByAccountIdPipelinesV1StreamsRequestSchema $schema = null,
		public ?\FoundryCo\Cloudflare\Responses\PostV4AccountsByAccountIdPipelinesV1StreamsRequestWorkerBinding $workerBinding = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'format' => $this->format,
		    'http' => $this->http?->toArray(),
		    'schema' => $this->schema?->toArray(),
		    'worker_binding' => $this->workerBinding?->toArray(),
		], fn ($v) => $v !== null);
	}
}
