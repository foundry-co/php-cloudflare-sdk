<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PutV4AccountsByAccountIdPipelinesByPipelineNameDeprecatedRequestDestination
{
	public function __construct(
		public PutV4AccountsByAccountIdPipelinesByPipelineNameDeprecatedRequestDestinationBatch $batch,
		public PutV4AccountsByAccountIdPipelinesByPipelineNameDeprecatedRequestDestinationCompression $compression,
		/** Specifies the format of data to deliver. */
		public \FoundryCo\Cloudflare\Enums\PutV4AccountsByAccountIdPipelinesByPipelineNameDeprecatedRequestDestinationFormat $format,
		public PutV4AccountsByAccountIdPipelinesByPipelineNameDeprecatedRequestDestinationPath $path,
		/** Specifies the type of destination. */
		public \FoundryCo\Cloudflare\Enums\PutV4AccountsByAccountIdPipelinesByPipelineNameDeprecatedRequestDestinationType $type,
		public ?PutV4AccountsByAccountIdPipelinesByPipelineNameDeprecatedRequestDestinationCredentials $credentials = null,
	) {
	}
}
