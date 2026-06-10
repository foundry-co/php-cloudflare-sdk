<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ApiShieldApiPatchDiscoveredOperation
{
	public function __construct(
		/**
		 * State of operation in API Discovery
		 *   * `review` - Operation is not saved into API Shield Endpoint Management
		 *   * `saved` - Operation is saved into API Shield Endpoint Management
		 *   * `ignored` - Operation is marked as ignored
		 */
		public ?\FoundryCo\Cloudflare\Enums\ApiShieldApiPatchDiscoveredOperationState $state = null,
	) {
	}
}
