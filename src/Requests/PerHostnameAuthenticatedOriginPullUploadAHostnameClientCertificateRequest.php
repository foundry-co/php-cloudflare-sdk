<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Upload a Hostname Client Certificate
 */
readonly class PerHostnameAuthenticatedOriginPullUploadAHostnameClientCertificateRequest
{
	public function __construct(
		/** The hostname certificate. */
		public string $certificate,
		/** The hostname certificate's private key. */
		public string $privateKey,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'certificate' => $this->certificate,
		    'private_key' => $this->privateKey,
		], fn ($v) => $v !== null);
	}
}
