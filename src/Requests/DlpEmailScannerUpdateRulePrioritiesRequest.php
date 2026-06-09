<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update email scanner rule priorities
 */
readonly class DlpEmailScannerUpdateRulePrioritiesRequest
{
	public function __construct(
		public array $newPriorities,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'new_priorities' => $this->newPriorities,
		], fn ($v) => $v !== null);
	}
}
