<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Limits to apply for this Worker.
 */
readonly class WorkerScriptGetSettingsLimits
{
	public function __construct(
		/** The amount of CPU time this Worker can use in milliseconds. */
		public ?int $cpuMs = null,
		/** The number of subrequests this Worker can make per request. */
		public ?int $subrequests = null,
	) {
	}
}
