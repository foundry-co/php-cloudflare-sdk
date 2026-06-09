<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create email allow policy
 */
readonly class EmailSecurityCreateAllowPolicyRequest
{
	public function __construct(
		public mixed $createdAt,
		public mixed $id,
		/** Messages from this sender will be exempted from Spam, Spoof and Bulk dispositions. Note - This will not exempt messages with Malicious or Suspicious dispositions. */
		public bool $isAcceptableSender,
		/** Messages to this recipient will bypass all detections */
		public bool $isExemptRecipient,
		public bool $isRegex,
		/** Messages from this sender will bypass all detections and link following */
		public bool $isTrustedSender,
		/** Deprecated, use `modified_at` instead. End of life: November 1, 2026. */
		public mixed $lastModified,
		public string $pattern,
		/**
		 * Type of pattern matching.
		 * Note: UNKNOWN is deprecated and cannot be used when creating or updating policies, but may be returned for existing entries.
		 */
		public \FoundryCo\Cloudflare\Enums\EmailSecurityCreateAllowPolicyRequestPatternType $patternType,
		/** Enforce DMARC, SPF or DKIM authentication. When on, Email Security only honors policies that pass authentication. */
		public bool $verifySender,
		public ?string $comments = null,
		/** Deprecated as of July 1, 2025. Use `is_exempt_recipient` instead. End of life: July 1, 2026. */
		public ?bool $isRecipient = null,
		/** Deprecated as of July 1, 2025. Use `is_trusted_sender` instead. End of life: July 1, 2026. */
		public ?bool $isSender = null,
		/** Deprecated as of July 1, 2025. Use `is_acceptable_sender` instead. End of life: July 1, 2026. */
		public ?bool $isSpoof = null,
		public mixed $modifiedAt = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'created_at' => $this->createdAt,
		    'id' => $this->id,
		    'is_acceptable_sender' => $this->isAcceptableSender,
		    'is_exempt_recipient' => $this->isExemptRecipient,
		    'is_regex' => $this->isRegex,
		    'is_trusted_sender' => $this->isTrustedSender,
		    'last_modified' => $this->lastModified,
		    'pattern' => $this->pattern,
		    'pattern_type' => $this->patternType->value,
		    'verify_sender' => $this->verifySender,
		    'comments' => $this->comments,
		    'is_recipient' => $this->isRecipient,
		    'is_sender' => $this->isSender,
		    'is_spoof' => $this->isSpoof,
		    'modified_at' => $this->modifiedAt,
		], fn ($v) => $v !== null);
	}
}
