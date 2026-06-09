<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create D1 Database
 */
readonly class D1CreateDatabaseRequest
{
	public function __construct(
		/** D1 database name. */
		public string $name,
		/** Specify the location to restrict the D1 database to run and store data. If this option is present, the location hint is ignored. */
		public ?\FoundryCo\Cloudflare\Enums\D1CreateDatabaseRequestJurisdiction $jurisdiction = null,
		/** Specify the region to create the D1 primary, if available. If this option is omitted, the D1 will be created as close as possible to the current user. */
		public ?\FoundryCo\Cloudflare\Enums\D1CreateDatabaseRequestPrimaryLocationHint $primaryLocationHint = null,
		/** Configuration for D1 read replication. */
		public ?\FoundryCo\Cloudflare\Responses\D1CreateDatabaseRequestReadReplication $readReplication = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'jurisdiction' => $this->jurisdiction?->value,
		    'primary_location_hint' => $this->primaryLocationHint?->value,
		    'read_replication' => $this->readReplication?->toArray(),
		], fn ($v) => $v !== null);
	}
}
