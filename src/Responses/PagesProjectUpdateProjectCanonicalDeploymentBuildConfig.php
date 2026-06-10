<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configs for the project build process.
 */
readonly class PagesProjectUpdateProjectCanonicalDeploymentBuildConfig
{
	public function __construct(
		/** The classifying tag for analytics. */
		public ?string $webAnalyticsTag = null,
		/** The auth token for analytics. */
		public ?string $webAnalyticsToken = null,
		/** Enable build caching for the project. */
		public ?bool $buildCaching = null,
		/** Command used to build project. */
		public ?string $buildCommand = null,
		/** Assets output directory of the build. */
		public ?string $destinationDir = null,
		/** Directory to run the command. */
		public ?string $rootDir = null,
	) {
	}
}
