<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PutV4AccountsByAccountIdPipelinesByPipelineNameDeprecatedRequestDestination
{
	public function __construct(
		public ?PutV4AccountsByAccountIdPipelinesByPipelineNameDeprecatedRequestDestinationBatch $batch = null,
		public ?PutV4AccountsByAccountIdPipelinesByPipelineNameDeprecatedRequestDestinationCompression $compression = null,
		/** Specifies the format of data to deliver. */
		public ?\FoundryCo\Cloudflare\Enums\PutV4AccountsByAccountIdPipelinesByPipelineNameDeprecatedRequestDestinationFormat $format = null,
		public ?PutV4AccountsByAccountIdPipelinesByPipelineNameDeprecatedRequestDestinationPath $path = null,
		/** Specifies the type of destination. */
		public ?\FoundryCo\Cloudflare\Enums\PutV4AccountsByAccountIdPipelinesByPipelineNameDeprecatedRequestDestinationType $type = null,
		public ?PutV4AccountsByAccountIdPipelinesByPipelineNameDeprecatedRequestDestinationCredentials $credentials = null,
	) {
	}
}
