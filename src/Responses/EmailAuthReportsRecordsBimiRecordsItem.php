<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Summary of a single DNS record
 */
readonly class EmailAuthReportsRecordsBimiRecordsItem
{
	public function __construct(
		/** Record content */
		public ?string $content = null,
		/** DNS record ID */
		public ?string $id = null,
		/** DNS record name */
		public ?string $name = null,
		/** Time to live in seconds */
		public ?int $ttl = null,
		/** Record type */
		public ?string $type = null,
	) {
	}
}
