<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Certificate's required verification information.
 */
readonly class SslVerificationSslVerificationDetailsVerificationInfo
{
	public function __construct(
		/** Name of CNAME record. */
		public ?\FoundryCo\Cloudflare\Enums\SslVerificationSslVerificationDetailsVerificationInfoRecordName $recordName = null,
		/** Target of CNAME record. */
		public ?\FoundryCo\Cloudflare\Enums\SslVerificationSslVerificationDetailsVerificationInfoRecordTarget $recordTarget = null,
	) {
	}
}
