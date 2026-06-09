<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create predefined entry
 */
readonly class DlpEntriesCreatePredefinedEntryRequest
{
	public function __construct(
		public bool $enabled,
		public string $entryId,
		/**
		 * This field is not used as the owning profile.
		 * For predefined entries it is already set to a predefined profile.
		 */
		public ?string $profileId = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'enabled' => $this->enabled,
		    'entry_id' => $this->entryId,
		    'profile_id' => $this->profileId,
		], fn ($v) => $v !== null);
	}
}
