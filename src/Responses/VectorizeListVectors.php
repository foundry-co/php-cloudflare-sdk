<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class VectorizeListVectors
{
	public function __construct(
		/** Number of vectors returned in this response */
		public ?int $count = null,
		/** Whether there are more vectors available beyond this response */
		public ?bool $isTruncated = null,
		/** Total number of vectors in the index */
		public ?int $totalCount = null,
		/** Array of vector items */
		public ?array $vectors = null,
		/** When the cursor expires as an ISO8601 string */
		public ?\DateTimeImmutable $cursorExpirationTimestamp = null,
		/** Cursor for the next page of results */
		public ?string $nextCursor = null,
	) {
	}
}
