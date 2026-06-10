<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Status of a Service Binding's deployment to the Cloudflare network
 */
readonly class IpAddressManagementServiceBindingsGetServiceBindingProvisioning
{
	public function __construct(
		/**
		 * When a binding has been deployed to a majority of Cloudflare datacenters, the binding will become active and can be used with its associated service.
		 */
		public ?\FoundryCo\Cloudflare\Enums\IpAddressManagementServiceBindingsGetServiceBindingProvisioningState $state = null,
	) {
	}
}
