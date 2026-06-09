<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * The ordered list of level IDs for a sensitivity group.
 * Used to get and set the ordering of levels independently of level attributes.
 */
readonly class DLPSensitivityGroupsOrder
{
	public function __construct(
		public array $levelIds,
	) {
	}
}
