<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ApiShieldApiDiscoveryRetrieveDiscoveredOperationById
{
	public function __construct(
		public mixed $id = null,
		public mixed $lastUpdated = null,
		/** API discovery engine(s) that discovered this operation */
		public ?array $origin = null,
		/**
		 * State of operation in API Discovery
		 *   * `review` - Operation is not saved into API Shield Endpoint Management
		 *   * `saved` - Operation is saved into API Shield Endpoint Management
		 *   * `ignored` - Operation is marked as ignored
		 */
		public ?\FoundryCo\Cloudflare\Enums\ApiShieldApiDiscoveryRetrieveDiscoveredOperationByIdState $state = null,
		/** The endpoint which can contain path parameter templates in curly braces, each will be replaced from left to right with {varN}, starting with {var1}, during insertion. This will further be Cloudflare-normalized upon insertion. See: https://developers.cloudflare.com/rules/normalization/how-it-works/. */
		public ?string $endpoint = null,
		/** RFC3986-compliant host. */
		public ?string $host = null,
		/** The HTTP method used to access the endpoint. */
		public ?\FoundryCo\Cloudflare\Enums\ApiShieldApiDiscoveryRetrieveDiscoveredOperationByIdMethod $method = null,
		public ?ApiShieldApiDiscoveryRetrieveDiscoveredOperationByIdFeatures $features = null,
	) {
	}
}
