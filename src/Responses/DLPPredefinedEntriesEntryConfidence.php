<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DLPPredefinedEntriesEntryConfidence
{
	public function __construct(
		/** Indicates whether this entry has AI remote service validation. */
		public bool $aiContextAvailable,
		/** Indicates whether this entry has any form of validation that is not an AI remote service. */
		public bool $available,
	) {
	}
}
