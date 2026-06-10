<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RequestReviewRequestAppealsItem
{
	public function __construct(
		/** ID of the mitigation to appeal. */
		public ?string $id = null,
		/** Reason why the customer is appealing. */
		public ?\FoundryCo\Cloudflare\Enums\RequestReviewRequestAppealsItemReason $reason = null,
	) {
	}
}
