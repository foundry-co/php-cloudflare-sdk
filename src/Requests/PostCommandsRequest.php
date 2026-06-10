<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create account commands
 */
readonly class PostCommandsRequest
{
	public function __construct(
		/** List of device-level commands to execute */
		public array $commands,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'commands' => $this->commands,
		], fn ($v) => $v !== null);
	}
}
