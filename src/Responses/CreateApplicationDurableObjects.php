<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Durable object configuration using a namespace ID
 */
readonly class CreateApplicationDurableObjects
{
	public function __construct(
		/** The namespace ID of the durable object namespace to use for this application. */
		public ?string $namespaceId = null,
	) {
	}
}
