<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkerScriptDeleteSubdomain
{
	public function __construct(
		/** Whether the Worker is available on the workers.dev subdomain. */
		public ?bool $enabled = null,
		/** Whether the Worker's Preview URLs are available on the workers.dev subdomain. */
		public ?bool $previewsEnabled = null,
	) {
	}
}
