<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class GetWorkerVersionModulesItem
{
	public function __construct(
		/** The base64-encoded module content. */
		public ?string $contentBase64 = null,
		/** The content type of the module. */
		public ?string $contentType = null,
		/** The name of the module. */
		public ?string $name = null,
	) {
	}
}
