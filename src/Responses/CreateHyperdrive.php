<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CreateHyperdrive
{
	public function __construct(
		/** Define configurations using a unique string identifier. */
		public ?string $id = null,
		/** The name of the Hyperdrive configuration. Used to identify the configuration in the Cloudflare dashboard and API. */
		public ?string $name = null,
		public mixed $origin = null,
		public mixed $caching = null,
		/** Defines the creation time of the Hyperdrive configuration. */
		public ?\DateTimeImmutable $createdOn = null,
		/** Defines the last modified time of the Hyperdrive configuration. */
		public ?\DateTimeImmutable $modifiedOn = null,
		/** mTLS configuration for the origin connection. Cannot be used with VPC Service origins; TLS must be managed on the VPC Service. */
		public ?CreateHyperdriveMtls $mtls = null,
		/**
		 * The (soft) maximum number of connections the Hyperdrive is allowed to make to the origin database.
		 *
		 * Maximum allowed: 20 for free tier accounts, 100 for paid tier accounts.
		 * If not specified, defaults to 20 for free tier and 60 for paid tier.
		 * Contact Cloudflare if you need a higher limit.
		 */
		public ?int $originConnectionLimit = null,
	) {
	}
}
