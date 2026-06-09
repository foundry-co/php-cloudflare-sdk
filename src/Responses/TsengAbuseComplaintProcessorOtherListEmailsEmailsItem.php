<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * An email sent to the customer for an abuse report.
 */
readonly class TsengAbuseComplaintProcessorOtherListEmailsEmailsItem
{
	public function __construct(
		/** Body content of the email. */
		public string $body,
		/** Unique identifier of the email. */
		public string $id,
		/** Email address of the recipient. */
		public string $recipient,
		/** When the email was sent. Time in RFC 3339 format (https://www.rfc-editor.org/rfc/rfc3339.html) */
		public string $sentAt,
		/** Subject line of the email. */
		public string $subject,
	) {
	}
}
