<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DlsZoneRegionalHostnamesList
{
	public function __construct(
		public mixed $createdOn = null,
		/** DNS hostname to be regionalized, must be a subdomain of the zone. Wildcards are supported for one level, e.g `*.example.com` */
		public ?string $hostname = null,
		/** Identifying key for the region */
		public ?string $regionKey = null,
		/** Configure which routing method to use for the regional hostname */
		public ?string $routing = null,
	) {
	}
}
