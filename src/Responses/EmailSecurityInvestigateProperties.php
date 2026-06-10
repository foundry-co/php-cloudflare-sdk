<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Message processing properties
 */
readonly class EmailSecurityInvestigateProperties
{
	public function __construct(
		/** Pattern that allowlisted this message */
		public ?string $allowlistedPattern = null,
		/** Type of allowlist pattern */
		public ?\FoundryCo\Cloudflare\Enums\EmailSecurityInvestigatePropertiesAllowlistedPatternType $allowlistedPatternType = null,
		/** Whether message was blocklisted */
		public ?bool $blocklistedMessage = null,
		/** Pattern that blocklisted this message */
		public ?string $blocklistedPattern = null,
		/** Legacy field for allowlist pattern type */
		public ?\FoundryCo\Cloudflare\Enums\EmailSecurityInvestigatePropertiesWhitelistedPatternType $whitelistedPatternType = null,
	) {
	}
}
