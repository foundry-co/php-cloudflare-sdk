<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarBGPSnapshotMeta
{
	public function __construct(
		/** Timestamp of the underlying data. */
		public \DateTimeImmutable $dataTime,
		/** Timestamp when the query was executed. */
		public \DateTimeImmutable $queryTime,
		/** Total number of ASPA objects. */
		public int $totalCount,
	) {
	}
}
