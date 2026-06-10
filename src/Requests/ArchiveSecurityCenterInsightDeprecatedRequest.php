<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Archives Security Center Insight
 */
readonly class ArchiveSecurityCenterInsightDeprecatedRequest
{
	public function __construct(
		public ?bool $dismiss = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'dismiss' => $this->dismiss,
		], fn ($v) => $v !== null);
	}
}
