<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkerRoutesGetRoute
{
	public function __construct(
		public mixed $id = null,
		/** Pattern to match incoming requests against. [Learn more](https://developers.cloudflare.com/workers/configuration/routing/routes/#matching-behavior). */
		public ?string $pattern = null,
		/** Name of the script to run if the route matches. */
		public ?string $script = null,
	) {
	}
}
