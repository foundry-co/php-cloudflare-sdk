<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a new sinkhole for your account
 */
readonly class SinkholeConfigCreateSinkholeRequest
{
	public function __construct(
		/** The name of the sinkhole. */
		public string $name,
		/** The name of the R2 bucket to store results. Required if you want to store large request bodies in R2. */
		public ?string $r2Bucket = null,
		/** The id of the R2 instance. Required if you want to store large request bodies in R2. */
		public ?string $r2Id = null,
		/** The secret key for the R2 API token. Required if you want to store large request bodies in R2. */
		public ?string $r2Secret = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'r2_bucket' => $this->r2Bucket,
		    'r2_id' => $this->r2Id,
		    'r2_secret' => $this->r2Secret,
		], fn ($v) => $v !== null);
	}
}
