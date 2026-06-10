<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PostV4AccountsByAccountIdPipelinesDeprecatedDestination
{
	public function __construct(
		public ?PostV4AccountsByAccountIdPipelinesDeprecatedDestinationBatch $batch = null,
		public ?PostV4AccountsByAccountIdPipelinesDeprecatedDestinationCompression $compression = null,
		/** Specifies the format of data to deliver. */
		public ?\FoundryCo\Cloudflare\Enums\PostV4AccountsByAccountIdPipelinesDeprecatedDestinationFormat $format = null,
		public ?PostV4AccountsByAccountIdPipelinesDeprecatedDestinationPath $path = null,
		/** Specifies the type of destination. */
		public ?\FoundryCo\Cloudflare\Enums\PostV4AccountsByAccountIdPipelinesDeprecatedDestinationType $type = null,
	) {
	}
}
