<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create Peer
 */
readonly class SecondaryDnsPeerCreatePeerRequest
{
	public function __construct(
		/** The name of the peer. */
		public string $name,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		], fn ($v) => $v !== null);
	}
}
