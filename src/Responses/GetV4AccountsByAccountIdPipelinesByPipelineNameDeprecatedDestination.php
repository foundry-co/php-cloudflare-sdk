<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class GetV4AccountsByAccountIdPipelinesByPipelineNameDeprecatedDestination
{
	public function __construct(
		public ?GetV4AccountsByAccountIdPipelinesByPipelineNameDeprecatedDestinationBatch $batch = null,
		public ?GetV4AccountsByAccountIdPipelinesByPipelineNameDeprecatedDestinationCompression $compression = null,
		/** Specifies the format of data to deliver. */
		public ?\FoundryCo\Cloudflare\Enums\GetV4AccountsByAccountIdPipelinesByPipelineNameDeprecatedDestinationFormat $format = null,
		public ?GetV4AccountsByAccountIdPipelinesByPipelineNameDeprecatedDestinationPath $path = null,
		/** Specifies the type of destination. */
		public ?\FoundryCo\Cloudflare\Enums\GetV4AccountsByAccountIdPipelinesByPipelineNameDeprecatedDestinationType $type = null,
	) {
	}
}
