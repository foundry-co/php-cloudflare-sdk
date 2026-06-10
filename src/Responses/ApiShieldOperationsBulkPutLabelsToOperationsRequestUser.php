<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * User labels to replace for all affected operations
 */
readonly class ApiShieldOperationsBulkPutLabelsToOperationsRequestUser
{
	public function __construct(
		/** List of user label names. Providing an empty array will result in all user labels being removed from all affected operations */
		public ?array $labels = null,
	) {
	}
}
