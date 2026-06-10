<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Contains account related information.
 */
readonly class AuditLogsV2GetAccountAuditLogsAccount
{
	public function __construct(
		/** A unique identifier for the account. */
		public ?string $id = null,
		/** A string that identifies the account name. */
		public ?string $name = null,
	) {
	}
}
