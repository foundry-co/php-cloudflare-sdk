<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class MagicRedundancyGroupsCreateRedundancyGroup
{
	public function __construct(
		public ?\DateTimeImmutable $createdOn = null,
		/** Optional description */
		public ?string $description = null,
		/** Redundancy group identifier */
		public ?string $id = null,
		public ?\DateTimeImmutable $modifiedOn = null,
		/** Human-readable name */
		public ?string $name = null,
	) {
	}
}
