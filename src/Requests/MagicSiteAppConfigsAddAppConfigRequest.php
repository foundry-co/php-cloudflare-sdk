<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a new App Config
 */
readonly class MagicSiteAppConfigsAddAppConfigRequest
{
	public function __construct(
		/** Whether to breakout traffic to the app's endpoints directly. Null preserves default behavior. */
		public ?bool $breakout = null,
		/** WAN interfaces to prefer over default WANs, highest-priority first. Can only be specified for breakout rules (breakout must be true). */
		public ?array $preferredWans = null,
		/** Priority of traffic. 0 is default, anything greater is prioritized. (Currently only 0 and 1 are supported) */
		public ?int $priority = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'breakout' => $this->breakout,
		    'preferred_wans' => $this->preferredWans,
		    'priority' => $this->priority,
		], fn ($v) => $v !== null);
	}
}
