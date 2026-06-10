<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ApiShieldSchemaValidationRetrieveUserSchemaHosts
{
	public function __construct(
		public mixed $createdAt = null,
		/** Hosts serving the schema, e.g zone.host.com */
		public ?array $hosts = null,
		/** Name of the schema */
		public ?string $name = null,
		public mixed $schemaId = null,
	) {
	}
}
