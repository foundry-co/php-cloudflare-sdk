<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class TenantsRetrieveTenant
{
	public function __construct(
		public \DateTimeImmutable $cdate,
		public \DateTimeImmutable $edate,
		public TenantsRetrieveTenantTenantContacts $tenantContacts,
		public array $tenantLabels,
		public TenantsRetrieveTenantTenantMetadata $tenantMetadata,
		public string $tenantName,
		public array $tenantNetwork,
		public string $tenantStatus,
		public string $tenantTag,
		public string $tenantType,
		public array $tenantUnits,
		public ?string $customerId = null,
	) {
	}
}
