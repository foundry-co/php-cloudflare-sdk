<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class MagicCF1SitesSite
{
	public function __construct(
		/** A human-provided name describing the CF1 Site that should be unique within the account. */
		public string $name,
		public ?\DateTimeImmutable $createdOn = null,
		/** A human-provided description of the CF1 Site. */
		public ?string $description = null,
		public mixed $id = null,
		public ?MagicCF1SitesSiteLocation $location = null,
		public ?\DateTimeImmutable $modifiedOn = null,
	) {
	}
}
