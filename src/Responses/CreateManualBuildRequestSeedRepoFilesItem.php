<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CreateManualBuildRequestSeedRepoFilesItem
{
	public function __construct(
		public ?string $content = null,
		public ?string $filename = null,
		public ?bool $isBase64 = null,
		/** Text to replace in the file */
		public ?string $replace = null,
	) {
	}
}
