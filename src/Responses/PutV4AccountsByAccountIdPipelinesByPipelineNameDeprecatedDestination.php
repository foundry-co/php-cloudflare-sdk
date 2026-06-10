<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PutV4AccountsByAccountIdPipelinesByPipelineNameDeprecatedDestination
{
	public function __construct(
		public ?PutV4AccountsByAccountIdPipelinesByPipelineNameDeprecatedDestinationBatch $batch = null,
		public ?PutV4AccountsByAccountIdPipelinesByPipelineNameDeprecatedDestinationCompression $compression = null,
		/** Specifies the format of data to deliver. */
		public ?\FoundryCo\Cloudflare\Enums\PutV4AccountsByAccountIdPipelinesByPipelineNameDeprecatedDestinationFormat $format = null,
		public ?PutV4AccountsByAccountIdPipelinesByPipelineNameDeprecatedDestinationPath $path = null,
		/** Specifies the type of destination. */
		public ?\FoundryCo\Cloudflare\Enums\PutV4AccountsByAccountIdPipelinesByPipelineNameDeprecatedDestinationType $type = null,
	) {
	}
}
