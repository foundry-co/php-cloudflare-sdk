<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class Destinationupdate
{
	public function __construct(
		public ?DestinationupdateConfiguration $configuration = null,
		public ?bool $enabled = null,
		public ?string $name = null,
		public ?array $scripts = null,
		public ?string $slug = null,
	) {
	}
}
