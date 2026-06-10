<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class EmailSendingAccountSendBuilder
{
	public function __construct(
		/** Email addresses to which the message was delivered immediately. */
		public ?array $delivered = null,
		/** Message ID of the sent email. */
		public ?string $messageId = null,
		/** Email addresses that permanently bounced. */
		public ?array $permanentBounces = null,
		/** Email addresses for which delivery was queued for later. */
		public ?array $queued = null,
	) {
	}
}
