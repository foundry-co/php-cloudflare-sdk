<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DlpEntriesUpdatePredefinedEntry
{
	public function __construct(
		public ?DlpEntriesUpdatePredefinedEntryConfidence $confidence = null,
		public ?bool $enabled = null,
		public ?string $id = null,
		public ?string $name = null,
		public ?string $profileId = null,
		public ?DlpEntriesUpdatePredefinedEntryVariant $variant = null,
	) {
	}
}
