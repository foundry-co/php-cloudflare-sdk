<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccountLoadBalancerMonitorGroupsListMonitorGroupReferences
{
	public function __construct(
		public ?\FoundryCo\Cloudflare\Enums\AccountLoadBalancerMonitorGroupsListMonitorGroupReferencesReferenceType $referenceType = null,
		public ?string $resourceId = null,
		public ?string $resourceName = null,
		public ?string $resourceType = null,
	) {
	}
}
