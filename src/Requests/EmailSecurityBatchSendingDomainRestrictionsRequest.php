<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Batch sending domain restrictions operations
 */
readonly class EmailSecurityBatchSendingDomainRestrictionsRequest
{
	public function __construct(
		public array $deletes,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'deletes' => $this->deletes,
		], fn ($v) => $v !== null);
	}
}
