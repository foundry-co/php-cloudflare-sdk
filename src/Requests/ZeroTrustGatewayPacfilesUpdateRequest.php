<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a Zero Trust Gateway PAC file
 */
readonly class ZeroTrustGatewayPacfilesUpdateRequest
{
	public function __construct(
		/** Actual contents of the PAC file */
		public string $contents,
		/** Detailed description of the PAC file. */
		public string $description,
		/** Name of the PAC file. */
		public string $name,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'contents' => $this->contents,
		    'description' => $this->description,
		    'name' => $this->name,
		], fn ($v) => $v !== null);
	}
}
