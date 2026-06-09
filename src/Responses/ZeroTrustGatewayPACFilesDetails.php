<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZeroTrustGatewayPACFilesDetails
{
	public function __construct(
		/** Actual contents of the PAC file */
		public ?string $contents = null,
		public ?\DateTimeImmutable $createdAt = null,
		/** Detailed description of the PAC file. */
		public ?string $description = null,
		public ?string $id = null,
		/** Name of the PAC file. */
		public ?string $name = null,
		/** URL-friendly version of the PAC file name. */
		public ?string $slug = null,
		public ?\DateTimeImmutable $updatedAt = null,
		/** Unique URL to download the PAC file. */
		public ?string $url = null,
	) {
	}
}
