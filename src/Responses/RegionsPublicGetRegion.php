<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RegionsPublicGetRegion
{
	public function __construct(
		public \DateTimeImmutable $createdOn,
		public string $id,
		public \DateTimeImmutable $modifiedOn,
		public string $name,
		public string $regionKey,
		public int $version,
		public \DateTimeImmutable $versionCreatedOn,
	) {
	}
}
