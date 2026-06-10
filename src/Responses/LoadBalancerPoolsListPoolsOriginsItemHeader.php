<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * The request header is used to pass additional information with an HTTP request. Currently supported header is 'Host'.
 */
readonly class LoadBalancerPoolsListPoolsOriginsItemHeader
{
	public function __construct(
		/** The 'Host' header allows to override the hostname set in the HTTP request. Current support is 1 'Host' header override per origin. */
		public ?array $host = null,
	) {
	}
}
