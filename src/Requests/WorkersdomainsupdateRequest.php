<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Attach Domain
 */
readonly class WorkersdomainsupdateRequest
{
	public function __construct(
		/** ID of the TLS certificate issued for the domain. */
		public string $certId,
		/** Worker environment associated with the domain. */
		public string $environment,
		/** Hostname of the domain. Can be either the zone apex or a subdomain of the zone. Requests to this hostname will be routed to the configured Worker. */
		public string $hostname,
		/** Immutable ID of the domain. */
		public string $id,
		/** Name of the Worker associated with the domain. Requests to the configured hostname will be routed to this Worker. */
		public string $service,
		/** ID of the zone containing the domain hostname. */
		public string $zoneId,
		/** Name of the zone containing the domain hostname. */
		public string $zoneName,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'cert_id' => $this->certId,
		    'environment' => $this->environment,
		    'hostname' => $this->hostname,
		    'id' => $this->id,
		    'service' => $this->service,
		    'zone_id' => $this->zoneId,
		    'zone_name' => $this->zoneName,
		], fn ($v) => $v !== null);
	}
}
