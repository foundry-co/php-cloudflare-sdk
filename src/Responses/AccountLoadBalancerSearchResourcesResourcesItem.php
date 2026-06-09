<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A reference to a load balancer resource.
 */
readonly class AccountLoadBalancerSearchResourcesResourcesItem
{
	public function __construct(
		/** When listed as a reference, the type (direction) of the reference. */
		public ?\FoundryCo\Cloudflare\Enums\AccountLoadBalancerSearchResourcesResourcesItemReferenceType $referenceType = null,
		/** A list of references to (referrer) or from (referral) this resource. */
		public ?array $references = null,
		public ?string $resourceId = null,
		/** The human-identifiable name of the resource. */
		public ?string $resourceName = null,
		/** The type of the resource. */
		public ?\FoundryCo\Cloudflare\Enums\AccountLoadBalancerSearchResourcesResourcesItemResourceType $resourceType = null,
	) {
	}
}
