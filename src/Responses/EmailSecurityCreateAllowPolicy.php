<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * An email allow policy
 */
readonly class EmailSecurityCreateAllowPolicy
{
	public function __construct(
		public mixed $createdAt = null,
		public mixed $id = null,
		/** Deprecated, use `modified_at` instead. End of life: November 1, 2026. */
		public mixed $lastModified = null,
		public ?string $comments = null,
		/** Messages from this sender will be exempted from Spam, Spoof and Bulk dispositions. Note - This will not exempt messages with Malicious or Suspicious dispositions. */
		public ?bool $isAcceptableSender = null,
		/** Messages to this recipient will bypass all detections */
		public ?bool $isExemptRecipient = null,
		/** Deprecated as of July 1, 2025. Use `is_exempt_recipient` instead. End of life: July 1, 2026. */
		public ?bool $isRecipient = null,
		public ?bool $isRegex = null,
		/** Deprecated as of July 1, 2025. Use `is_trusted_sender` instead. End of life: July 1, 2026. */
		public ?bool $isSender = null,
		/** Deprecated as of July 1, 2025. Use `is_acceptable_sender` instead. End of life: July 1, 2026. */
		public ?bool $isSpoof = null,
		/** Messages from this sender will bypass all detections and link following */
		public ?bool $isTrustedSender = null,
		public mixed $modifiedAt = null,
		public ?string $pattern = null,
		/**
		 * Type of pattern matching.
		 * Note: UNKNOWN is deprecated and cannot be used when creating or updating policies, but may be returned for existing entries.
		 */
		public ?\FoundryCo\Cloudflare\Enums\EmailSecurityCreateAllowPolicyPatternType $patternType = null,
		/** Enforce DMARC, SPF or DKIM authentication. When on, Email Security only honors policies that pass authentication. */
		public ?bool $verifySender = null,
	) {
	}
}
