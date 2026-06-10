<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PostV4AccountsByAccountIdPipelinesDeprecatedRequestDestination
{
	public function __construct(
		public ?PostV4AccountsByAccountIdPipelinesDeprecatedRequestDestinationBatch $batch = null,
		public ?PostV4AccountsByAccountIdPipelinesDeprecatedRequestDestinationCompression $compression = null,
		public ?PostV4AccountsByAccountIdPipelinesDeprecatedRequestDestinationCredentials $credentials = null,
		/** Specifies the format of data to deliver. */
		public ?\FoundryCo\Cloudflare\Enums\PostV4AccountsByAccountIdPipelinesDeprecatedRequestDestinationFormat $format = null,
		public ?PostV4AccountsByAccountIdPipelinesDeprecatedRequestDestinationPath $path = null,
		/** Specifies the type of destination. */
		public ?\FoundryCo\Cloudflare\Enums\PostV4AccountsByAccountIdPipelinesDeprecatedRequestDestinationType $type = null,
	) {
	}
}
