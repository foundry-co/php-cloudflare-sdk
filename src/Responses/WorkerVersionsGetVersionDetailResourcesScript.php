<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkerVersionsGetVersionDetailResourcesScript
{
	public function __construct(
		/** Hashed script content */
		public ?string $etag = null,
		/** The names of handlers exported as part of the default export. */
		public ?array $handlers = null,
		/** The client most recently used to deploy this Worker. */
		public ?string $lastDeployedFrom = null,
		/** Named exports, such as Durable Object class implementations and named entrypoints. */
		public ?array $namedHandlers = null,
	) {
	}
}
