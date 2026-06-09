<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Post Worker subdomain
 */
readonly class WorkerScriptPostSubdomainRequest
{
	public function __construct(
		/** Whether the Worker should be available on the workers.dev subdomain. */
		public bool $enabled,
		/** Whether the Worker's Preview URLs should be available on the workers.dev subdomain. */
		public ?bool $previewsEnabled = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'enabled' => $this->enabled,
		    'previews_enabled' => $this->previewsEnabled,
		], fn ($v) => $v !== null);
	}
}
