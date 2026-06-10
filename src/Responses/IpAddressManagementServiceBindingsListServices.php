<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class IpAddressManagementServiceBindingsListServices
{
	public function __construct(
		/**
		 * Identifier of a Service on the Cloudflare network. Available services and their IDs may be found in the
		 * **List Services** endpoint.
		 */
		public ?string $id = null,
		/** Name of a service running on the Cloudflare network */
		public ?string $name = null,
	) {
	}
}
