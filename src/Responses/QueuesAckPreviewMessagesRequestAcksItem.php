<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class QueuesAckPreviewMessagesRequestAcksItem
{
	public function __construct(
		/** An ID that represents an "in-flight" message that has been pulled from a Queue. You must hold on to this ID and use it to acknowledge this message. */
		public ?string $leaseId = null,
	) {
	}
}
