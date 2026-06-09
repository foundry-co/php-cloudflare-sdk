<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkersAiPostRunGenericRequestOptionsGateway
{
	public function __construct(
		/** Cache TTL in seconds */
		public ?float $cacheTtl = null,
		/** AI Gateway ID for caching and logging */
		public ?string $id = null,
		/** Skip cache lookup for this request */
		public ?bool $skipCache = null,
	) {
	}
}
