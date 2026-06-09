<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PerHostnameTLSSettingsList
{
	public function __construct(
		/** This is the time the tls setting was originally created for this hostname. */
		public ?\DateTimeImmutable $createdAt = null,
		/** The hostname for which the tls settings are set. */
		public ?string $hostname = null,
		/** Deployment status for the given tls setting. */
		public ?string $status = null,
		/** This is the time the tls setting was updated. */
		public ?\DateTimeImmutable $updatedAt = null,
		/**
		 * The TLS setting value.
		 * The type depends on the `setting_id` used in the request path:
		 * - `ciphers`: an array of allowed cipher suite strings in BoringSSL format (e.g., `["ECDHE-RSA-AES128-GCM-SHA256", "AES128-GCM-SHA256"]`).
		 * - `min_tls_version`: a string indicating the minimum TLS version — one of `"1.0"`, `"1.1"`, `"1.2"`, or `"1.3"` (e.g., `"1.2"`).
		 * - `http2`: a string indicating whether HTTP/2 is enabled — `"on"` or `"off"` (e.g., `"on"`).
		 */
		public mixed $value = null,
	) {
	}
}
