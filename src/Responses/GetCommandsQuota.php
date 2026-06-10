<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class GetCommandsQuota
{
	public function __construct(
		/** The remaining number of commands that can be initiated for an account */
		public ?float $quota = null,
		/** The number of commands that have been initiated for an account */
		public ?float $quotaUsage = null,
		/** The time when the quota resets */
		public ?\DateTimeImmutable $resetTime = null,
	) {
	}
}
