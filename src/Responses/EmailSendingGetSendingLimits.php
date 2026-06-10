<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class EmailSendingGetSendingLimits
{
	public function __construct(
		/** The resolved daily sending quota for the account. Null when the quota is not yet available. */
		public ?EmailSendingGetSendingLimitsQuota $quota = null,
	) {
	}
}
