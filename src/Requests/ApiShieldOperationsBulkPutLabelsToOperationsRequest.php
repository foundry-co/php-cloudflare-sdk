<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Bulk replace label(s) on operation(s) in endpoint management
 */
readonly class ApiShieldOperationsBulkPutLabelsToOperationsRequest
{
	public function __construct(
		/** Managed labels to replace for all affected operations */
		public \FoundryCo\Cloudflare\Responses\ApiShieldOperationsBulkPutLabelsToOperationsRequestManaged $managed,
		/** Operation IDs selector */
		public \FoundryCo\Cloudflare\Responses\ApiShieldOperationsBulkPutLabelsToOperationsRequestSelector $selector,
		/** User labels to replace for all affected operations */
		public \FoundryCo\Cloudflare\Responses\ApiShieldOperationsBulkPutLabelsToOperationsRequestUser $user,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'managed' => $this->managed->toArray(),
		    'selector' => $this->selector->toArray(),
		    'user' => $this->user->toArray(),
		], fn ($v) => $v !== null);
	}
}
