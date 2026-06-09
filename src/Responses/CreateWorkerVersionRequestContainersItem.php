<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Container configuration for a Worker.
 */
readonly class CreateWorkerVersionRequestContainersItem
{
	public function __construct(
		/** Select which Durable Object class should get this container attached. */
		public string $className,
	) {
	}
}
