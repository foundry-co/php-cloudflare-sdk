<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SinkholeConfigSinkholes
{
	public function __construct(
		/** The account tag that owns this sinkhole. */
		public ?string $accountTag = null,
		/** The date and time when the sinkhole was created. */
		public ?\DateTimeImmutable $createdOn = null,
		/** The unique identifier for the sinkhole. */
		public ?string $id = null,
		/** The date and time when the sinkhole was last modified. */
		public ?\DateTimeImmutable $modifiedOn = null,
		/** The name of the sinkhole. */
		public ?string $name = null,
		/** The name of the R2 bucket to store results. */
		public ?string $r2Bucket = null,
		/** The id of the R2 instance. */
		public ?string $r2Id = null,
	) {
	}
}
