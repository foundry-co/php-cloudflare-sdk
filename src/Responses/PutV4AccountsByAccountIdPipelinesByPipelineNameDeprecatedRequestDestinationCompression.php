<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PutV4AccountsByAccountIdPipelinesByPipelineNameDeprecatedRequestDestinationCompression
{
	public function __construct(
		/** Specifies the desired compression algorithm and format. */
		public ?\FoundryCo\Cloudflare\Enums\PutV4AccountsByAccountIdPipelinesByPipelineNameDeprecatedRequestDestinationCompressionType $type = null,
	) {
	}
}
