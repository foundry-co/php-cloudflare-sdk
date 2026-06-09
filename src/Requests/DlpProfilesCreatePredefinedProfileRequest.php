<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create predefined profile
 */
readonly class DlpProfilesCreatePredefinedProfileRequest
{
	public function __construct(
		public string $profileId,
		public ?bool $aiContextEnabled = null,
		public ?int $allowedMatchCount = null,
		public ?string $confidenceThreshold = null,
		/** Scan the context of predefined entries to only return matches surrounded by keywords. */
		public ?\FoundryCo\Cloudflare\Responses\DlpProfilesCreatePredefinedProfileRequestContextAwareness $contextAwareness = null,
		public ?array $entries = null,
		public ?bool $ocrEnabled = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'profile_id' => $this->profileId,
		    'ai_context_enabled' => $this->aiContextEnabled,
		    'allowed_match_count' => $this->allowedMatchCount,
		    'confidence_threshold' => $this->confidenceThreshold,
		    'context_awareness' => $this->contextAwareness?->toArray(),
		    'entries' => $this->entries,
		    'ocr_enabled' => $this->ocrEnabled,
		], fn ($v) => $v !== null);
	}
}
