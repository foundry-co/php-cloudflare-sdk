<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update Stream
 */
readonly class PatchV4AccountsByAccountIdPipelinesV1StreamsByStreamIdRequest
{
	public function __construct(
		public ?\FoundryCo\Cloudflare\Responses\PatchV4AccountsByAccountIdPipelinesV1StreamsByStreamIdRequestHttp $http = null,
		public ?\FoundryCo\Cloudflare\Responses\PatchV4AccountsByAccountIdPipelinesV1StreamsByStreamIdRequestWorkerBinding $workerBinding = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'http' => $this->http?->toArray(),
		    'worker_binding' => $this->workerBinding?->toArray(),
		], fn ($v) => $v !== null);
	}
}
