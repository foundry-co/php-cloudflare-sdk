<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * The RDP-specific rules that define clipboard behavior for RDP connections.
 */
readonly class AccessPoliciesUpdateAnAccessReusablePolicyRequestConnectionRulesRdp
{
	public function __construct(
		/** Clipboard formats allowed when copying from local machine to remote RDP session. */
		public ?array $allowedClipboardLocalToRemoteFormats = null,
		/** Clipboard formats allowed when copying from remote RDP session to local machine. */
		public ?array $allowedClipboardRemoteToLocalFormats = null,
	) {
	}
}
