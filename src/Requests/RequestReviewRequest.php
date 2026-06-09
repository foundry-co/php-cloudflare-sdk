<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Request review on mitigations
 */
readonly class RequestReviewRequest
{
	public function __construct(
		/** List of mitigations to appeal. */
		public array $appeals,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'appeals' => $this->appeals,
		], fn ($v) => $v !== null);
	}
}
