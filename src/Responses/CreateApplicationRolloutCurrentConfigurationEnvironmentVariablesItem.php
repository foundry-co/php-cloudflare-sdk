<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * An environment variable with a value set
 */
readonly class CreateApplicationRolloutCurrentConfigurationEnvironmentVariablesItem
{
	public function __construct(
		/** An environment variable name */
		public ?string $name = null,
		/** An environment variable value */
		public ?string $value = null,
	) {
	}
}
