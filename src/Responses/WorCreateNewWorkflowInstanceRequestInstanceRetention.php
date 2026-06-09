<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorCreateNewWorkflowInstanceRequestInstanceRetention
{
	public function __construct(
		/** Specifies the duration in milliseconds or as a string like '5 minutes'. */
		public mixed $errorRetention = null,
		/** Specifies the duration in milliseconds or as a string like '5 minutes'. */
		public mixed $successRetention = null,
	) {
	}
}
