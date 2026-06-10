<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class TenantsRetrieveTenant
{
	public function __construct(
		public ?\DateTimeImmutable $cdate = null,
		public ?\DateTimeImmutable $edate = null,
		public ?TenantsRetrieveTenantTenantContacts $tenantContacts = null,
		public ?array $tenantLabels = null,
		public ?TenantsRetrieveTenantTenantMetadata $tenantMetadata = null,
		public ?string $tenantName = null,
		public ?array $tenantNetwork = null,
		public ?string $tenantStatus = null,
		public ?string $tenantTag = null,
		public ?string $tenantType = null,
		public ?array $tenantUnits = null,
		public ?string $customerId = null,
	) {
	}
}
