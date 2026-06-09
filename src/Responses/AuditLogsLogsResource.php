<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Provides details about the affected resource.
 */
readonly class AuditLogsLogsResource
{
	public function __construct(
		/** The unique identifier for the affected resource. */
		public ?string $id = null,
		/** The Cloudflare product associated with the resource. */
		public ?string $product = null,
		public ?array $request = null,
		public ?array $response = null,
		/** The scope of the resource. */
		public ?array $scope = null,
		/** The type of the resource. */
		public ?string $type = null,
	) {
	}
}
