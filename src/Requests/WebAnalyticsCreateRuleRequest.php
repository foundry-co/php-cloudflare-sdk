<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a Web Analytics rule
 */
readonly class WebAnalyticsCreateRuleRequest
{
	public function __construct(
		public ?string $host = null,
		/** Whether the rule includes or excludes traffic from being measured. */
		public ?bool $inclusive = null,
		/** Whether the rule is paused or not. */
		public ?bool $isPaused = null,
		public ?array $paths = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'host' => $this->host,
		    'inclusive' => $this->inclusive,
		    'is_paused' => $this->isPaused,
		    'paths' => $this->paths,
		], fn ($v) => $v !== null);
	}
}
