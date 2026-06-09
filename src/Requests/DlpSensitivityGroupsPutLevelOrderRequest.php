<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Set the ordering of levels within a sensitivity group.
 */
readonly class DlpSensitivityGroupsPutLevelOrderRequest
{
	public function __construct(
		public array $levelIds,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'level_ids' => $this->levelIds,
		], fn ($v) => $v !== null);
	}
}
