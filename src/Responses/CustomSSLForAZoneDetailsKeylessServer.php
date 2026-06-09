<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CustomSSLForAZoneDetailsKeylessServer
{
	public function __construct(
		/** When the Keyless SSL was created. */
		public \DateTimeImmutable $createdOn,
		public array $enabled,
		public array $host,
		public array $id,
		/** When the Keyless SSL was last modified. */
		public \DateTimeImmutable $modifiedOn,
		public array $name,
		/** Available permissions for the Keyless SSL for the current user requesting the item. */
		public array $permissions,
		public array $port,
		public array $status,
		public ?array $tunnel = null,
	) {
	}
}
