<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Edit TLS setting for hostname
 */
readonly class PerHostnameTlsSettingsPutRequest
{
	public function __construct(
		/**
		 * The TLS setting value.
		 * The type depends on the `setting_id` used in the request path:
		 * - `ciphers`: an array of allowed cipher suite strings in BoringSSL format (e.g., `["ECDHE-RSA-AES128-GCM-SHA256", "AES128-GCM-SHA256"]`).
		 * - `min_tls_version`: a string indicating the minimum TLS version — one of `"1.0"`, `"1.1"`, `"1.2"`, or `"1.3"` (e.g., `"1.2"`).
		 * - `http2`: a string indicating whether HTTP/2 is enabled — `"on"` or `"off"` (e.g., `"on"`).
		 */
		public mixed $value,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'value' => $this->value,
		], fn ($v) => $v !== null);
	}
}
