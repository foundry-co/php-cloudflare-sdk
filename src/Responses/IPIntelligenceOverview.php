<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class IPIntelligenceOverview
{
	public function __construct(
		/** Specifies a reference to the autonomous systems (AS) that the IP address belongs to. */
		public ?IPIntelligenceOverviewBelongsToRef $belongsToRef = null,
		public mixed $ip = null,
		public ?array $riskTypes = null,
	) {
	}
}
