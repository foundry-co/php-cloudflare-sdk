<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Send an email
 */
readonly class EmailSendingAccountSendBuilderRequest
{
	public function __construct(
		/** Sender email address. Either a plain string or an object with address and name. */
		public mixed $from,
		/** Email subject line. */
		public string $subject,
		/** File attachments and inline images. */
		public ?array $attachments = null,
		/** BCC recipient(s). A single email string or an array of email strings. */
		public mixed $bcc = null,
		/** CC recipient(s). A single email string or an array of email strings. */
		public mixed $cc = null,
		/** Custom email headers as key-value pairs. */
		public ?array $headers = null,
		/** HTML body of the email. At least one of text or html must be provided (non-empty). */
		public ?string $html = null,
		/** Reply-to address. Either a plain string or an object with address and name. */
		public mixed $replyTo = null,
		/** Plain text body of the email. At least one of text or html must be provided (non-empty). */
		public ?string $text = null,
		/** Recipient(s). Optional if cc or bcc is provided. A single email string or an array of email strings. */
		public mixed $to = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'from' => $this->from,
		    'subject' => $this->subject,
		    'attachments' => $this->attachments,
		    'bcc' => $this->bcc,
		    'cc' => $this->cc,
		    'headers' => $this->headers,
		    'html' => $this->html,
		    'reply_to' => $this->replyTo,
		    'text' => $this->text,
		    'to' => $this->to,
		], fn ($v) => $v !== null);
	}
}
