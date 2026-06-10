<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a PAC file
 */
readonly class ZeroTrustGatewayPacfilesCreatePacfileRequest
{
	public function __construct(
		/** Actual contents of the PAC file */
		public string $contents,
		/** Name of the PAC file. */
		public string $name,
		/** Detailed description of the PAC file. */
		public ?string $description = null,
		/** URL-friendly version of the PAC file name. If not provided, it will be auto-generated */
		public ?string $slug = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'contents' => $this->contents,
		    'name' => $this->name,
		    'description' => $this->description,
		    'slug' => $this->slug,
		], fn ($v) => $v !== null);
	}
}
