<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Shows a count of application instance states.
 */
readonly class ApplicationsCreateApplicationHealthInstances
{
	public function __construct(
		/** Number of instances with a running container. */
		public int $active,
		/** Number of instances assigned to a container, but the container is not yet running. */
		public int $assigned,
	) {
	}
}
