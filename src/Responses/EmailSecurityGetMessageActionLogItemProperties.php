<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Additional properties for the action
 */
readonly class EmailSecurityGetMessageActionLogItemProperties
{
	public function __construct(
		/** Target folder for move operations */
		public ?string $folder = null,
		/** User who requested the action */
		public ?string $requestedBy = null,
	) {
	}
}
