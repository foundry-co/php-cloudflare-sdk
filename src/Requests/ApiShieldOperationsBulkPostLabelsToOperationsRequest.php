<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Bulk attach label(s) on operation(s) in endpoint management
 */
readonly class ApiShieldOperationsBulkPostLabelsToOperationsRequest
{
	public function __construct(
		/** Operation IDs selector */
		public \FoundryCo\Cloudflare\Responses\ApiShieldOperationsBulkPostLabelsToOperationsRequestSelector $selector,
		public ?\FoundryCo\Cloudflare\Responses\ApiShieldOperationsBulkPostLabelsToOperationsRequestManaged $managed = null,
		public ?\FoundryCo\Cloudflare\Responses\ApiShieldOperationsBulkPostLabelsToOperationsRequestUser $user = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'selector' => $this->selector->toArray(),
		    'managed' => $this->managed?->toArray(),
		    'user' => $this->user?->toArray(),
		], fn ($v) => $v !== null);
	}
}
