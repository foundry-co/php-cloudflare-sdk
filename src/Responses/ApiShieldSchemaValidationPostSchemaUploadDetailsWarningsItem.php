<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ApiShieldSchemaValidationPostSchemaUploadDetailsWarningsItem
{
	public function __construct(
		/** Code that identifies the event that occurred. */
		public ?int $code = null,
		/** JSONPath location(s) in the schema where these events were encountered.  See [https://goessner.net/articles/JsonPath/](https://goessner.net/articles/JsonPath/) for JSONPath specification. */
		public ?array $locations = null,
		/** Diagnostic message that describes the event. */
		public ?string $message = null,
	) {
	}
}
