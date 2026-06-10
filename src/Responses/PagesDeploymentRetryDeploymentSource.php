<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configs for the project source control.
 */
readonly class PagesDeploymentRetryDeploymentSource
{
	public function __construct(
		public ?PagesDeploymentRetryDeploymentSourceConfig $config = null,
		/** The source control management provider. */
		public ?\FoundryCo\Cloudflare\Enums\PagesDeploymentRetryDeploymentSourceType $type = null,
	) {
	}
}
