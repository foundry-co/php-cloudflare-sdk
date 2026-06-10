<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create predefined profile
 */
readonly class DlpProfilesCreatePredefinedProfileConfigRequest
{
	public function __construct(
		public ?bool $aiContextEnabled = null,
		public ?int $allowedMatchCount = null,
		public ?string $confidenceThreshold = null,
		public ?array $enabledEntries = null,
		public ?array $entries = null,
		public ?bool $ocrEnabled = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'ai_context_enabled' => $this->aiContextEnabled,
		    'allowed_match_count' => $this->allowedMatchCount,
		    'confidence_threshold' => $this->confidenceThreshold,
		    'enabled_entries' => $this->enabledEntries,
		    'entries' => $this->entries,
		    'ocr_enabled' => $this->ocrEnabled,
		], fn ($v) => $v !== null);
	}
}
