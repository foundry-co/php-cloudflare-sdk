<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A reference pairing a sensitivity group with a specific level within that group.
 */
readonly class DlpProfilesCreateCustomProfilesRequestSensitivityLevelsItem
{
	public function __construct(
		public ?string $groupId = null,
		public ?string $levelId = null,
	) {
	}
}
