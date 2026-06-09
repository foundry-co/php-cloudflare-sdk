<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Details of the worker that receives and edits Zaraz Context object.
 */
readonly class ZarazConfigSettingsContextEnricher
{
	public function __construct(
		public string $escapedWorkerName,
		public string $workerTag,
	) {
	}
}
