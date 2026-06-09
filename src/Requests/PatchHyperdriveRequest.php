<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Patch Hyperdrive
 */
readonly class PatchHyperdriveRequest
{
	public function __construct(
		public mixed $caching = null,
		/** mTLS configuration for the origin connection. Cannot be used with VPC Service origins; TLS must be managed on the VPC Service. */
		public ?\FoundryCo\Cloudflare\Responses\PatchHyperdriveRequestMtls $mtls = null,
		/** The name of the Hyperdrive configuration. Used to identify the configuration in the Cloudflare dashboard and API. */
		public ?string $name = null,
		public mixed $origin = null,
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


	public function toArray(): array
	{
		return array_filter([
		    'caching' => $this->caching,
		    'mtls' => $this->mtls?->toArray(),
		    'name' => $this->name,
		    'origin' => $this->origin,
		    'origin_connection_limit' => $this->originConnectionLimit,
		], fn ($v) => $v !== null);
	}
}
