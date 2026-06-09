<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update the attributes of a single document fingerprint.
 */
readonly class DlpDocumentFingerprintsUpdateRequest
{
	public function __construct(
		public ?string $description = null,
		public ?int $matchPercent = null,
		public ?string $name = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'description' => $this->description,
		    'match_percent' => $this->matchPercent,
		    'name' => $this->name,
		], fn ($v) => $v !== null);
	}
}
