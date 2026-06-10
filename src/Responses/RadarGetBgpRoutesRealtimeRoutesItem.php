<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetBgpRoutesRealtimeRoutesItem
{
	public function __construct(
		/** AS-level path for this route, from collector to origin. */
		public ?array $asPath = null,
		/** Public collector ID for this route. */
		public ?string $collector = null,
		/** BGP community values. */
		public ?array $communities = null,
		/** IP prefix of this query. */
		public ?string $prefix = null,
		/** Latest timestamp of change for this route. */
		public ?string $timestamp = null,
	) {
	}
}
