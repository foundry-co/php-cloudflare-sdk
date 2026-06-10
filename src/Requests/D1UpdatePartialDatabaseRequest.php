<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update D1 Database partially
 */
readonly class D1UpdatePartialDatabaseRequest
{
	public function __construct(
		/** Configuration for D1 read replication. */
		public ?\FoundryCo\Cloudflare\Responses\D1UpdatePartialDatabaseRequestReadReplication $readReplication = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'read_replication' => $this->readReplication?->toArray(),
		], fn ($v) => $v !== null);
	}
}
