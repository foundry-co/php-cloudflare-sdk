<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * The ordered list of level IDs for a sensitivity group.
 * Used to get and set the ordering of levels independently of level attributes.
 */
readonly class DlpSensitivityGroupsGetLevelOrder
{
	public function __construct(
		public ?array $levelIds = null,
	) {
	}
}
