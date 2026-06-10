<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DlpEntriesGetDlpEntryConfidence
{
	public function __construct(
		/** Indicates whether this entry has AI remote service validation. */
		public ?bool $aiContextAvailable = null,
		/** Indicates whether this entry has any form of validation that is not an AI remote service. */
		public ?bool $available = null,
	) {
	}
}
