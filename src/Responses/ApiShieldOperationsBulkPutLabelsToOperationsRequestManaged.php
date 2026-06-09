<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Managed labels to replace for all affected operations
 */
readonly class ApiShieldOperationsBulkPutLabelsToOperationsRequestManaged
{
	public function __construct(
		/** List of managed label names. Providing an empty array will result in all managed labels being removed from all affected operations */
		public array $labels,
	) {
	}
}
