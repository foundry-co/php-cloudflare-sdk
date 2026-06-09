<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class KeylessSSLForAZoneConfigurations
{
	public function __construct(
		/** When the Keyless SSL was created. */
		public \DateTimeImmutable $createdOn,
		/** Whether or not the Keyless SSL is on or off. */
		public bool $enabled,
		/** The keyless SSL name. */
		public string $host,
		/** Keyless certificate identifier tag. */
		public string $id,
		/** When the Keyless SSL was last modified. */
		public \DateTimeImmutable $modifiedOn,
		/** The keyless SSL name. */
		public string $name,
		/** Available permissions for the Keyless SSL for the current user requesting the item. */
		public array $permissions,
		/** The keyless SSL port used to communicate between Cloudflare and the client's Keyless SSL server. */
		public float $port,
		/** Status of the Keyless SSL. */
		public \FoundryCo\Cloudflare\Enums\KeylessSSLForAZoneConfigurationsStatus $status,
		/** Configuration for using Keyless SSL through a Cloudflare Tunnel. */
		public ?KeylessSSLForAZoneConfigurationsTunnel $tunnel = null,
	) {
	}
}
