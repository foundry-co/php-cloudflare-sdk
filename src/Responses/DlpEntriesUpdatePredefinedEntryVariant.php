<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DlpEntriesUpdatePredefinedEntryVariant
{
	public function __construct(
		public ?\FoundryCo\Cloudflare\Enums\DlpEntriesUpdatePredefinedEntryVariantTopicType $topicType = null,
		public ?\FoundryCo\Cloudflare\Enums\DlpEntriesUpdatePredefinedEntryVariantType $type = null,
		/** A customer-facing explanation of what this predefined AI prompt topic represents. */
		public ?string $description = null,
	) {
	}
}
