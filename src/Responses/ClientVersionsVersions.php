<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ClientVersionsVersions
{
	public function __construct(
		/** The release date timestamp. */
		public string $releaseDate,
		/** The client version string. */
		public string $version,
		/** Size of the package in bytes. */
		public ?int $packageSize = null,
		/** URL to download the package. */
		public ?string $packageUrl = null,
		/** Release notes for this version. */
		public ?string $releaseNotes = null,
	) {
	}
}
