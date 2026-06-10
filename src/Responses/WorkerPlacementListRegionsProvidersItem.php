<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkerPlacementListRegionsProvidersItem
{
	public function __construct(
		/** The cloud provider identifier. */
		public ?string $id = null,
		/** List of regions available for this provider. */
		public ?array $regions = null,
	) {
	}
}
