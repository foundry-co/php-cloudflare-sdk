<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class EmailSendingBuilder
{
	public function __construct(
		/** Email addresses to which the message was delivered immediately. */
		public array $delivered,
		/** Message ID of the sent email. */
		public string $messageId,
		/** Email addresses that permanently bounced. */
		public array $permanentBounces,
		/** Email addresses for which delivery was queued for later. */
		public array $queued,
	) {
	}
}
