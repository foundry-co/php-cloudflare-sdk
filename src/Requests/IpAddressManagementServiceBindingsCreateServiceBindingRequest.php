<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create Service Binding
 */
readonly class IpAddressManagementServiceBindingsCreateServiceBindingRequest
{
	public function __construct(
		/** IP Prefix in Classless Inter-Domain Routing format. */
		public string $cidr,
		/**
		 * Identifier of a Service on the Cloudflare network. Available services and their IDs may be found in the
		 * **List Services** endpoint.
		 */
		public string $serviceId,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'cidr' => $this->cidr,
		    'service_id' => $this->serviceId,
		], fn ($v) => $v !== null);
	}
}
