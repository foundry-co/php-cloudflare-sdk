<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkersEditWorkerReferencesDomainsItem
{
	public function __construct(
		/** ID of the TLS certificate issued for the custom domain. */
		public string $certificateId,
		/** Full hostname of the custom domain, including the zone name. */
		public string $hostname,
		/** ID of the custom domain. */
		public string $id,
		/** ID of the zone. */
		public string $zoneId,
		/** Name of the zone. */
		public string $zoneName,
	) {
	}
}
