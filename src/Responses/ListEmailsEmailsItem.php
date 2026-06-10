<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * An email sent to the customer for an abuse report.
 */
readonly class ListEmailsEmailsItem
{
	public function __construct(
		/** Body content of the email. */
		public ?string $body = null,
		/** Unique identifier of the email. */
		public ?string $id = null,
		/** Email address of the recipient. */
		public ?string $recipient = null,
		/** When the email was sent. Time in RFC 3339 format (https://www.rfc-editor.org/rfc/rfc3339.html) */
		public ?string $sentAt = null,
		/** Subject line of the email. */
		public ?string $subject = null,
	) {
	}
}
