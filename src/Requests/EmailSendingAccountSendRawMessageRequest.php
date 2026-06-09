<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Send a raw MIME email
 */
readonly class EmailSendingAccountSendRawMessageRequest
{
	public function __construct(
		/** Sender email address. */
		public string $from,
		/** The full MIME-encoded email message. Should include standard RFC 5322 headers such as From, To, Subject, and Content-Type. The from and recipients fields in the request body control SMTP envelope routing; the From and To headers in the MIME message control what the recipient's email client displays. */
		public string $mimeMessage,
		/** List of recipient email addresses. */
		public array $recipients,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'from' => $this->from,
		    'mime_message' => $this->mimeMessage,
		    'recipients' => $this->recipients,
		], fn ($v) => $v !== null);
	}
}
