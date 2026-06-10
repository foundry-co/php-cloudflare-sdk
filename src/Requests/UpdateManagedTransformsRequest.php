<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update Managed Transforms
 */
readonly class UpdateManagedTransformsRequest
{
	public function __construct(
		/** The list of Managed Request Transforms. */
		public array $managedRequestHeaders,
		/** The list of Managed Response Transforms. */
		public array $managedResponseHeaders,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'managed_request_headers' => $this->managedRequestHeaders,
		    'managed_response_headers' => $this->managedResponseHeaders,
		], fn ($v) => $v !== null);
	}
}
