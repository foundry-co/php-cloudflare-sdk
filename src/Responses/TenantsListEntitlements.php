<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class TenantsListEntitlements
{
	public function __construct(
		public ?TenantsListEntitlementsAllowAddSubdomain $allowAddSubdomain = null,
		public ?TenantsListEntitlementsAllowAutoAcceptInvites $allowAutoAcceptInvites = null,
		public ?TenantsListEntitlementsCnameSetupAllowed $cnameSetupAllowed = null,
		public ?array $customEntitlements = null,
		public ?TenantsListEntitlementsMhsCertificateCount $mhsCertificateCount = null,
		public ?TenantsListEntitlementsPartialSetupAllowed $partialSetupAllowed = null,
	) {
	}
}
