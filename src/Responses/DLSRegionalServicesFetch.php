<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DLSRegionalServicesFetch
{
	public function __construct(
		public mixed $createdOn,
		/** DNS hostname to be regionalized, must be a subdomain of the zone. Wildcards are supported for one level, e.g `*.example.com` */
		public string $hostname,
		/** Identifying key for the region */
		public string $regionKey,
		/** Configure which routing method to use for the regional hostname */
		public string $routing,
	) {
	}
}
