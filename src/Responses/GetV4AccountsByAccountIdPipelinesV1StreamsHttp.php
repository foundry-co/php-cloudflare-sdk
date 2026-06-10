<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class GetV4AccountsByAccountIdPipelinesV1StreamsHttp
{
	public function __construct(
		/** Indicates that authentication is required for the HTTP endpoint. */
		public ?bool $authentication = null,
		/** Indicates that the HTTP endpoint is enabled. */
		public ?bool $enabled = null,
		/** Specifies the CORS options for the HTTP endpoint. */
		public ?GetV4AccountsByAccountIdPipelinesV1StreamsHttpCors $cors = null,
	) {
	}
}
