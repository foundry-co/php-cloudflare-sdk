<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkerScriptContentNamedHandlersItem
{
	public function __construct(
		/** The names of handlers exported as part of the named export. */
		public ?array $handlers = null,
		/** The name of the export. */
		public ?string $name = null,
	) {
	}
}
