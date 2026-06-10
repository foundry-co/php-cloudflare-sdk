<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Cloudflare Tunnel configuration
 */
readonly class CloudflareTunnelConfigurationPutConfiguration
{
	public function __construct(
		/** Identifier. */
		public ?string $accountId = null,
		/** The tunnel configuration and ingress rules. */
		public ?CloudflareTunnelConfigurationPutConfigurationConfig $config = null,
		public ?\DateTimeImmutable $createdAt = null,
		/** Indicates if this is a locally or remotely configured tunnel. If `local`, manage the tunnel using a YAML file on the origin machine. If `cloudflare`, manage the tunnel's configuration on the Zero Trust dashboard. */
		public ?\FoundryCo\Cloudflare\Enums\CloudflareTunnelConfigurationPutConfigurationSource $source = null,
		/** UUID of the tunnel. */
		public ?string $tunnelId = null,
		/** The version of the Tunnel Configuration. */
		public ?int $version = null,
	) {
	}
}
