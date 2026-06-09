<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Patch user label
 */
readonly class ApiShieldPatchUserLabelRequest
{
	public function __construct(
		/** The description of the label */
		public ?string $description = null,
		/** Metadata for the label */
		public ?array $metadata = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'description' => $this->description,
		    'metadata' => $this->metadata,
		], fn ($v) => $v !== null);
	}
}
