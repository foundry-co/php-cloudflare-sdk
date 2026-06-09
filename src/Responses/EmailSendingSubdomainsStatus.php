<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class EmailSendingSubdomainsStatus
{
	public function __construct(
		/** Desired DNS records for the subdomain. */
		public ?array $records = null,
		/** Aggregated DNS state for the subdomain. `unlocked` means desired records exist with correct content but at least one has had its email_routing/read_only lock cleared. */
		public ?\FoundryCo\Cloudflare\Enums\EmailSendingSubdomainsStatusStatus $status = null,
	) {
	}
}
