<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class VectorizeGetVectorizeIndex
{
	public function __construct(
		public ?VectorizeGetVectorizeIndexConfig $config = null,
		/** Specifies the timestamp the resource was created as an ISO8601 string. */
		public ?\DateTimeImmutable $createdOn = null,
		/** Specifies the description of the index. */
		public ?string $description = null,
		/** Specifies the timestamp the resource was modified as an ISO8601 string. */
		public ?\DateTimeImmutable $modifiedOn = null,
		public ?string $name = null,
	) {
	}
}
