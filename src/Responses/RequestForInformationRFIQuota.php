<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RequestForInformationRFIQuota
{
	public function __construct(
		/** Anniversary date is when annual quota limit is refreshed. */
		public mixed $anniversaryDate = null,
		/** Quarter anniversary date is when quota limit is refreshed each quarter. */
		public mixed $quarterAnniversaryDate = null,
		/** Tokens for the quarter. */
		public ?int $quota = null,
		/** Tokens remaining for the quarter. */
		public ?int $remaining = null,
	) {
	}
}
