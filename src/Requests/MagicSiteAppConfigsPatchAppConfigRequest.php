<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update an App Config
 */
readonly class MagicSiteAppConfigsPatchAppConfigRequest
{
	public function __construct(
		/** Magic account app ID. */
		public ?string $accountAppId = null,
		/** Whether to breakout traffic to the app's endpoints directly. Null preserves default behavior. */
		public ?bool $breakout = null,
		/** Managed app ID. */
		public ?string $managedAppId = null,
		/** WAN interfaces to prefer over default WANs, highest-priority first. Can only be specified for breakout rules (breakout must be true). */
		public ?array $preferredWans = null,
		/** Priority of traffic. 0 is default, anything greater is prioritized. (Currently only 0 and 1 are supported) */
		public ?int $priority = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'account_app_id' => $this->accountAppId,
		    'breakout' => $this->breakout,
		    'managed_app_id' => $this->managedAppId,
		    'preferred_wans' => $this->preferredWans,
		    'priority' => $this->priority,
		], fn ($v) => $v !== null);
	}
}
