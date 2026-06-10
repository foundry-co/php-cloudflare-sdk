<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class IpAddressManagementServiceBindingsListServiceBindings
{
	public function __construct(
		/** IP Prefix in Classless Inter-Domain Routing format. */
		public ?string $cidr = null,
		/** Identifier of a Service Binding. */
		public ?string $id = null,
		/** Status of a Service Binding's deployment to the Cloudflare network */
		public ?IpAddressManagementServiceBindingsListServiceBindingsProvisioning $provisioning = null,
		/**
		 * Identifier of a Service on the Cloudflare network. Available services and their IDs may be found in the
		 * **List Services** endpoint.
		 */
		public ?string $serviceId = null,
		/** Name of a service running on the Cloudflare network */
		public ?string $serviceName = null,
	) {
	}
}
