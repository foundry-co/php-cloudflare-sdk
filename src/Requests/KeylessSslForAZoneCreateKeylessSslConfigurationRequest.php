<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create Keyless SSL Configuration
 */
readonly class KeylessSslForAZoneCreateKeylessSslConfigurationRequest
{
	public function __construct(
		/** The zone's SSL certificate or SSL certificate and intermediate(s). */
		public string $certificate,
		/** The keyless SSL name. */
		public string $host,
		/** The keyless SSL port used to communicate between Cloudflare and the client's Keyless SSL server. */
		public float $port,
		/** A ubiquitous bundle has the highest probability of being verified everywhere, even by clients using outdated or unusual trust stores. An optimal bundle uses the shortest chain and newest intermediates. And the force bundle verifies the chain, but does not otherwise modify it. */
		public ?\FoundryCo\Cloudflare\Enums\KeylessSslForAZoneCreateKeylessSslConfigurationRequestBundleMethod $bundleMethod = null,
		/** The keyless SSL name. */
		public ?string $name = null,
		/** Configuration for using Keyless SSL through a Cloudflare Tunnel. */
		public ?\FoundryCo\Cloudflare\Responses\KeylessSslForAZoneCreateKeylessSslConfigurationRequestTunnel $tunnel = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'certificate' => $this->certificate,
		    'host' => $this->host,
		    'port' => $this->port,
		    'bundle_method' => $this->bundleMethod?->value,
		    'name' => $this->name,
		    'tunnel' => $this->tunnel?->toArray(),
		], fn ($v) => $v !== null);
	}
}
