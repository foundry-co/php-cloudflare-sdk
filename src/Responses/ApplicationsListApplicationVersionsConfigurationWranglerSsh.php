<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configuration properties for SSH'ing into a container with Wrangler
 */
readonly class ApplicationsListApplicationVersionsConfigurationWranglerSsh
{
	public function __construct(
		public ?bool $enabled = null,
		public ?float $port = null,
	) {
	}
}
