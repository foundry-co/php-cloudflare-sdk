<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DLPPredefinedEntriesEntry
{
	public function __construct(
		public DLPPredefinedEntriesEntryConfidence $confidence,
		public bool $enabled,
		public string $id,
		public string $name,
		public ?string $profileId = null,
		public mixed $variant = null,
	) {
	}
}
