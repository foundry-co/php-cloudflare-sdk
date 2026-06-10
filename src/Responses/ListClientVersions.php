<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ListClientVersions
{
	public function __construct(
		/** The release date timestamp. */
		public ?string $releaseDate = null,
		/** The client version string. */
		public ?string $version = null,
		/** Size of the package in bytes. */
		public ?int $packageSize = null,
		/** URL to download the package. */
		public ?string $packageUrl = null,
		/** Release notes for this version. */
		public ?string $releaseNotes = null,
	) {
	}
}
