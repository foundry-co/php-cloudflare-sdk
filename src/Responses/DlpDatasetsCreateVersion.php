<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DlpDatasetsCreateVersion
{
	public function __construct(
		public ?int $encodingVersion = null,
		public ?int $maxCells = null,
		public ?int $version = null,
		public ?bool $caseSensitive = null,
		public ?array $columns = null,
		public ?string $secret = null,
	) {
	}
}
