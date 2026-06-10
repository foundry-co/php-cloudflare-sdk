<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class EmailSecurityGetMessageTraceOutboundLinesItem
{
	public function __construct(
		/** Line number in the trace log */
		public ?int $lineno = null,
		public ?\DateTimeImmutable $loggedAt = null,
		public ?string $message = null,
		/** Deprecated, use `logged_at` instead. End of life: November 1, 2026. */
		public ?string $ts = null,
	) {
	}
}
