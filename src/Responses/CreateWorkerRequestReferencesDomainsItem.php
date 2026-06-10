<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CreateWorkerRequestReferencesDomainsItem
{
	public function __construct(
		/** ID of the TLS certificate issued for the custom domain. */
		public ?string $certificateId = null,
		/** Full hostname of the custom domain, including the zone name. */
		public ?string $hostname = null,
		/** ID of the custom domain. */
		public ?string $id = null,
		/** ID of the zone. */
		public ?string $zoneId = null,
		/** Name of the zone. */
		public ?string $zoneName = null,
	) {
	}
}
