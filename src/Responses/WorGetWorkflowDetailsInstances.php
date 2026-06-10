<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorGetWorkflowDetailsInstances
{
	public function __construct(
		public ?float $complete = null,
		public ?float $errored = null,
		public ?float $paused = null,
		public ?float $queued = null,
		public ?float $rollingBack = null,
		public ?float $running = null,
		public ?float $terminated = null,
		public ?float $waiting = null,
		public ?float $waitingForPause = null,
	) {
	}
}
