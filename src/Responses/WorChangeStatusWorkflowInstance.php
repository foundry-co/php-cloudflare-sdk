<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorChangeStatusWorkflowInstance
{
	public function __construct(
		public ?\FoundryCo\Cloudflare\Enums\WorChangeStatusWorkflowInstanceStatus $status = null,
		/** Accepts ISO 8601 with no timezone offsets and in UTC. */
		public ?\DateTimeImmutable $timestamp = null,
	) {
	}
}
