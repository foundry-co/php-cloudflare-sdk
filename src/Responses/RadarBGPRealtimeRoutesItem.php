<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarBGPRealtimeRoutesItem
{
	public function __construct(
		/** AS-level path for this route, from collector to origin. */
		public array $asPath,
		/** Public collector ID for this route. */
		public string $collector,
		/** BGP community values. */
		public array $communities,
		/** IP prefix of this query. */
		public string $prefix,
		/** Latest timestamp of change for this route. */
		public string $timestamp,
	) {
	}
}
