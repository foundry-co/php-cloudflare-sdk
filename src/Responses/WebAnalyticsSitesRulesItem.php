<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WebAnalyticsSitesRulesItem
{
	public function __construct(
		public ?array $created = null,
		/** The hostname the rule will be applied to. */
		public ?string $host = null,
		public ?array $id = null,
		/** Whether the rule includes or excludes traffic from being measured. */
		public ?bool $inclusive = null,
		/** Whether the rule is paused or not. */
		public ?bool $isPaused = null,
		/** The paths the rule will be applied to. */
		public ?array $paths = null,
		public ?float $priority = null,
	) {
	}
}
