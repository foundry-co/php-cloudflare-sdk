<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DLPProfilesConfig
{
	public function __construct(
		public int $allowedMatchCount,
		public string $confidenceThreshold,
		/** Entries to enable for this predefined profile. Any entries not provided will be disabled. */
		public array $enabledEntries,
		/** This field has been deprecated for `enabled_entries`. */
		public array $entries,
		/** The id of the predefined profile (uuid). */
		public string $id,
		/** The name of the predefined profile. */
		public string $name,
		public ?bool $aiContextEnabled = null,
		public ?bool $ocrEnabled = null,
		/** Whether this profile can be accessed by anyone. */
		public ?bool $openAccess = null,
	) {
	}
}
