<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * The resolved daily sending quota for the account. Null when the quota is not yet available.
 */
readonly class EmailSendingLimitsQuota
{
	public function __construct(
		/** The time period for the quota. */
		public ?\FoundryCo\Cloudflare\Enums\EmailSendingLimitsQuotaUnit $unit = null,
		/** The quota limit. */
		public ?int $value = null,
	) {
	}
}
