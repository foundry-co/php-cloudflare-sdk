<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Provides details about the zone affected by the action.
 */
readonly class AuditLogsV2GetAccountAuditLogsZone
{
	public function __construct(
		/** A string that identifies the zone id. */
		public ?string $id = null,
		/** A string that identifies the zone name. */
		public ?string $name = null,
	) {
	}
}
