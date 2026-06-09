<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Updates a raw event
 */
readonly class PatchEventRawUpdateRequest
{
	public function __construct(
		public ?array $data = null,
		public ?string $source = null,
		public ?string $tlp = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'data' => $this->data,
		    'source' => $this->source,
		    'tlp' => $this->tlp,
		], fn ($v) => $v !== null);
	}
}
