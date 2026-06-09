<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SchemaValidationHosts
{
	public function __construct(
		public mixed $createdAt,
		/** Hosts serving the schema, e.g zone.host.com */
		public array $hosts,
		/** Name of the schema */
		public string $name,
		public mixed $schemaId,
	) {
	}
}
