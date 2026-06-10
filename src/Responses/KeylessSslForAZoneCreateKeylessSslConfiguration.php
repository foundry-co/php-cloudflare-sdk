<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class KeylessSslForAZoneCreateKeylessSslConfiguration
{
	public function __construct(
		/** When the Keyless SSL was created. */
		public ?\DateTimeImmutable $createdOn = null,
		/** Whether or not the Keyless SSL is on or off. */
		public ?bool $enabled = null,
		/** The keyless SSL name. */
		public ?string $host = null,
		/** Keyless certificate identifier tag. */
		public ?string $id = null,
		/** When the Keyless SSL was last modified. */
		public ?\DateTimeImmutable $modifiedOn = null,
		/** The keyless SSL name. */
		public ?string $name = null,
		/** Available permissions for the Keyless SSL for the current user requesting the item. */
		public ?array $permissions = null,
		/** The keyless SSL port used to communicate between Cloudflare and the client's Keyless SSL server. */
		public ?float $port = null,
		/** Status of the Keyless SSL. */
		public ?\FoundryCo\Cloudflare\Enums\KeylessSslForAZoneCreateKeylessSslConfigurationStatus $status = null,
		/** Configuration for using Keyless SSL through a Cloudflare Tunnel. */
		public ?KeylessSslForAZoneCreateKeylessSslConfigurationTunnel $tunnel = null,
	) {
	}
}
