<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create Route
 */
readonly class WorkerRoutesCreateRouteRequest
{
	public function __construct(
		public mixed $id,
		/** Pattern to match incoming requests against. [Learn more](https://developers.cloudflare.com/workers/configuration/routing/routes/#matching-behavior). */
		public string $pattern,
		/** Name of the script to run if the route matches. */
		public ?string $script = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'id' => $this->id,
		    'pattern' => $this->pattern,
		    'script' => $this->script,
		], fn ($v) => $v !== null);
	}
}
