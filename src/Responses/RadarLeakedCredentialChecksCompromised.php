<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarLeakedCredentialChecksCompromised
{
	public function __construct(
		/** Metadata for the results. */
		public RadarLeakedCredentialChecksCompromisedMeta $meta,
		public RadarLeakedCredentialChecksCompromisedSummary0 $summary0,
	) {
	}
}
