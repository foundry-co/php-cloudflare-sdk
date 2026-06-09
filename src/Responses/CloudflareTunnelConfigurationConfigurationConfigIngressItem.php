<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Public hostname
 */
readonly class CloudflareTunnelConfigurationConfigurationConfigIngressItem
{
	public function __construct(
		/** Public hostname for this service. */
		public string $hostname,
		/**
		 * Protocol and address of destination server. Supported protocols: http://, https://, unix://, tcp://, ssh://, rdp://, unix+tls://, smb://. Alternatively can return a HTTP status code http_status:[code] e.g. 'http_status:404'.
		 */
		public string $service,
		public ?array $originRequest = null,
		/** Requests with this path route to this public hostname. */
		public ?string $path = null,
	) {
	}
}
