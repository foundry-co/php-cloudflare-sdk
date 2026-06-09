<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configs for the project source control.
 */
readonly class PagesProjectSourceLatestDeploymentSource
{
	public function __construct(
		public PagesProjectSourceLatestDeploymentSourceConfig $config,
		/** The source control management provider. */
		public \FoundryCo\Cloudflare\Enums\PagesProjectSourceLatestDeploymentSourceType $type,
	) {
	}
}
