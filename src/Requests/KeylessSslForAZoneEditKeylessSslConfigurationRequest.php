<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Edit Keyless SSL Configuration
 */
readonly class KeylessSslForAZoneEditKeylessSslConfigurationRequest
{
	public function __construct(
		/** Whether or not the Keyless SSL is on or off. */
		public ?bool $enabled = null,
		/** The keyless SSL name. */
		public ?string $host = null,
		/** The keyless SSL name. */
		public ?string $name = null,
		/** The keyless SSL port used to communicate between Cloudflare and the client's Keyless SSL server. */
		public ?float $port = null,
		/** Configuration for using Keyless SSL through a Cloudflare Tunnel. */
		public ?\FoundryCo\Cloudflare\Responses\KeylessSslForAZoneEditKeylessSslConfigurationRequestTunnel $tunnel = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'enabled' => $this->enabled,
		    'host' => $this->host,
		    'name' => $this->name,
		    'port' => $this->port,
		    'tunnel' => $this->tunnel?->toArray(),
		], fn ($v) => $v !== null);
	}
}
