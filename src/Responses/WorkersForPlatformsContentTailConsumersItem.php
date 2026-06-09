<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A reference to a script that will consume logs from the attached Worker.
 */
readonly class WorkersForPlatformsContentTailConsumersItem
{
	public function __construct(
		/** Name of Worker that is to be the consumer. */
		public string $service,
		/** Optional environment if the Worker utilizes one. */
		public ?string $environment = null,
		/** Optional dispatch namespace the script belongs to. */
		public ?string $namespace = null,
	) {
	}
}
