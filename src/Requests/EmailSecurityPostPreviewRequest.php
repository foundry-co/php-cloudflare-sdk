<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Preview for non-detection messages
 */
readonly class EmailSecurityPostPreviewRequest
{
	public function __construct(
		/** The identifier of the message */
		public string $postfixId,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'postfix_id' => $this->postfixId,
		], fn ($v) => $v !== null);
	}
}
