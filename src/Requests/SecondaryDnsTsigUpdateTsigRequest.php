<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update TSIG
 */
readonly class SecondaryDnsTsigUpdateTsigRequest
{
	public function __construct(
		/** TSIG algorithm. */
		public string $algo,
		public string $id,
		/** TSIG key name. */
		public string $name,
		/** TSIG secret. */
		public string $secret,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'algo' => $this->algo,
		    'id' => $this->id,
		    'name' => $this->name,
		    'secret' => $this->secret,
		], fn ($v) => $v !== null);
	}
}
