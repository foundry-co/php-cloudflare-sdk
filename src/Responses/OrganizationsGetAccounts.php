<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class OrganizationsGetAccounts
{
	public function __construct(
		public ?\DateTimeImmutable $createdOn = null,
		public ?string $id = null,
		public ?string $name = null,
		public ?OrganizationsGetAccountsSettings $settings = null,
		public ?\FoundryCo\Cloudflare\Enums\OrganizationsGetAccountsType $type = null,
	) {
	}
}
