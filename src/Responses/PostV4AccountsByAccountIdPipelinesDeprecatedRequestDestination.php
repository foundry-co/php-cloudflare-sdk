<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PostV4AccountsByAccountIdPipelinesDeprecatedRequestDestination
{
	public function __construct(
		public PostV4AccountsByAccountIdPipelinesDeprecatedRequestDestinationBatch $batch,
		public PostV4AccountsByAccountIdPipelinesDeprecatedRequestDestinationCompression $compression,
		public PostV4AccountsByAccountIdPipelinesDeprecatedRequestDestinationCredentials $credentials,
		/** Specifies the format of data to deliver. */
		public \FoundryCo\Cloudflare\Enums\PostV4AccountsByAccountIdPipelinesDeprecatedRequestDestinationFormat $format,
		public PostV4AccountsByAccountIdPipelinesDeprecatedRequestDestinationPath $path,
		/** Specifies the type of destination. */
		public \FoundryCo\Cloudflare\Enums\PostV4AccountsByAccountIdPipelinesDeprecatedRequestDestinationType $type,
	) {
	}
}
