<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccountRequestTracerRequestTraceRequestBody
{
	public function __construct(
		/** Base64 encoded request body */
		public ?string $base64 = null,
		/** Arbitrary json as request body */
		public ?array $json = null,
		/** Request body as plain text */
		public ?string $plainText = null,
	) {
	}
}
