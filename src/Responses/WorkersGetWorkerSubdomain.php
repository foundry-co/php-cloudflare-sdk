<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Subdomain settings for the Worker.
 */
readonly class WorkersGetWorkerSubdomain
{
	public function __construct(
		/** Whether the *.workers.dev subdomain is enabled for the Worker. */
		public ?bool $enabled = null,
		/** Whether [preview URLs](https://developers.cloudflare.com/workers/configuration/previews/) are enabled for the Worker. */
		public ?bool $previewsEnabled = null,
	) {
	}
}
