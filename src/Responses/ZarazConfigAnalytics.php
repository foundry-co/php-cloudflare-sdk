<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Cloudflare Monitoring settings.
 */
readonly class ZarazConfigAnalytics
{
	public function __construct(
		/** Consent purpose assigned to Monitoring. */
		public ?string $defaultPurpose = null,
		/** Whether Advanced Monitoring reports are enabled. */
		public ?bool $enabled = null,
		/** Session expiration time (seconds). */
		public ?int $sessionExpTime = null,
	) {
	}
}
