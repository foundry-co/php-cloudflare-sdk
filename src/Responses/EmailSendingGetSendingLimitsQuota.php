<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * The resolved daily sending quota for the account. Null when the quota is not yet available.
 */
readonly class EmailSendingGetSendingLimitsQuota
{
	public function __construct(
		/** The time period for the quota. */
		public ?\FoundryCo\Cloudflare\Enums\EmailSendingGetSendingLimitsQuotaUnit $unit = null,
		/** The quota limit. */
		public ?int $value = null,
	) {
	}
}
