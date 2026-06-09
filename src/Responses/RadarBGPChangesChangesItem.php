<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarBGPChangesChangesItem
{
	public function __construct(
		/** Number of new ASPA objects created. */
		public int $customersAdded,
		/** Number of ASPA objects deleted. */
		public int $customersRemoved,
		/** Date of the changes in ISO 8601 format. */
		public \DateTimeImmutable $date,
		public array $entries,
		/** Number of providers added to existing objects. */
		public int $providersAdded,
		/** Number of providers removed from existing objects. */
		public int $providersRemoved,
		/** Running total of active ASPA objects after this day. */
		public int $totalCount,
	) {
	}
}
