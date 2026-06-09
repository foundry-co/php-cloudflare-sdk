<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkersPipelinesOtherIdPipelinesV1StreamsHttp
{
	public function __construct(
		/** Indicates that authentication is required for the HTTP endpoint. */
		public bool $authentication,
		/** Indicates that the HTTP endpoint is enabled. */
		public bool $enabled,
		/** Specifies the CORS options for the HTTP endpoint. */
		public ?WorkersPipelinesOtherIdPipelinesV1StreamsHttpCors $cors = null,
	) {
	}
}
