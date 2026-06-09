<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class VersionsCreateWorkerVersionModulesItem
{
	public function __construct(
		/** The base64-encoded module content. */
		public string $contentBase64,
		/** The content type of the module. */
		public string $contentType,
		/** The name of the module. */
		public string $name,
	) {
	}
}
