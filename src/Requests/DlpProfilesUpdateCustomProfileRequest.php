<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update custom profile
 */
readonly class DlpProfilesUpdateCustomProfileRequest
{
	public function __construct(
		public string $name,
		public ?bool $aiContextEnabled = null,
		public ?int $allowedMatchCount = null,
		public ?string $confidenceThreshold = null,
		/** Scan the context of predefined entries to only return matches surrounded by keywords. */
		public ?\FoundryCo\Cloudflare\Responses\DlpProfilesUpdateCustomProfileRequestContextAwareness $contextAwareness = null,
		/** Data class IDs to associate with the profile. If omitted, existing associations are unchanged. */
		public ?array $dataClasses = null,
		/** Data tag IDs to associate with the profile. If omitted, existing associations are unchanged. */
		public ?array $dataTags = null,
		/** The description of the profile. */
		public ?string $description = null,
		/**
		 * Custom entries from this profile.
		 * If this field is omitted, entries owned by this profile will not be changed.
		 */
		public ?array $entries = null,
		public ?bool $ocrEnabled = null,
		/** Sensitivity levels to associate with the profile. If omitted, existing associations are unchanged. */
		public ?array $sensitivityLevels = null,
		/** Other entries, e.g. predefined or integration. */
		public ?array $sharedEntries = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'ai_context_enabled' => $this->aiContextEnabled,
		    'allowed_match_count' => $this->allowedMatchCount,
		    'confidence_threshold' => $this->confidenceThreshold,
		    'context_awareness' => $this->contextAwareness?->toArray(),
		    'data_classes' => $this->dataClasses,
		    'data_tags' => $this->dataTags,
		    'description' => $this->description,
		    'entries' => $this->entries,
		    'ocr_enabled' => $this->ocrEnabled,
		    'sensitivity_levels' => $this->sensitivityLevels,
		    'shared_entries' => $this->sharedEntries,
		], fn ($v) => $v !== null);
	}
}
