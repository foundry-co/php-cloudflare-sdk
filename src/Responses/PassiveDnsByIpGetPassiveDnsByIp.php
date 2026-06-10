<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PassiveDnsByIpGetPassiveDnsByIp
{
	public function __construct(
		/** Total results returned based on your search parameters. */
		public ?float $count = null,
		/** Current page within paginated list of results. */
		public ?float $page = null,
		/** Number of results per page of results. */
		public ?float $perPage = null,
		/** Reverse DNS look-ups observed during the time period. */
		public ?array $reverseRecords = null,
	) {
	}
}
