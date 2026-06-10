<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configuration for D1 read replication.
 */
readonly class D1UpdatePartialDatabaseRequestReadReplication
{
	public function __construct(
		/** The read replication mode for the database. Use 'auto' to create replicas and allow D1 automatically place them around the world, or 'disabled' to not use any database replicas (it can take a few hours for all replicas to be deleted). */
		public ?\FoundryCo\Cloudflare\Enums\D1UpdatePartialDatabaseRequestReadReplicationMode $mode = null,
	) {
	}
}
