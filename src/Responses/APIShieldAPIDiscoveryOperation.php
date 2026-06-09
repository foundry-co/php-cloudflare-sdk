<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class APIShieldAPIDiscoveryOperation
{
	public function __construct(
		/**
		 * State of operation in API Discovery
		 *   * `review` - Operation is not saved into API Shield Endpoint Management
		 *   * `saved` - Operation is saved into API Shield Endpoint Management
		 *   * `ignored` - Operation is marked as ignored
		 */
		public ?\FoundryCo\Cloudflare\Enums\APIShieldAPIDiscoveryOperationState $state = null,
	) {
	}
}
