<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DlpProfilesUpdatePredefinedProfileConfig
{
	public function __construct(
		public ?int $allowedMatchCount = null,
		public ?string $confidenceThreshold = null,
		/** Entries to enable for this predefined profile. Any entries not provided will be disabled. */
		public ?array $enabledEntries = null,
		/** This field has been deprecated for `enabled_entries`. */
		public ?array $entries = null,
		/** The id of the predefined profile (uuid). */
		public ?string $id = null,
		/** The name of the predefined profile. */
		public ?string $name = null,
		public ?bool $aiContextEnabled = null,
		public ?bool $ocrEnabled = null,
		/** Whether this profile can be accessed by anyone. */
		public ?bool $openAccess = null,
	) {
	}
}
