<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class VectorizeIndexInfo
{
	public function __construct(
		/** Specifies the number of dimensions for the index */
		public ?int $dimensions = null,
		/** Specifies the timestamp the last mutation batch was processed as an ISO8601 string. */
		public ?\DateTimeImmutable $processedUpToDatetime = null,
		/** The unique identifier for the async mutation operation containing the changeset. */
		public ?array $processedUpToMutation = null,
		/** Specifies the number of vectors present in the index */
		public ?int $vectorCount = null,
	) {
	}
}
