<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Certificate's required verification information.
 */
readonly class SSLVerificationDetailsVerificationInfo
{
	public function __construct(
		/** Name of CNAME record. */
		public ?\FoundryCo\Cloudflare\Enums\SSLVerificationDetailsVerificationInfoRecordName $recordName = null,
		/** Target of CNAME record. */
		public ?\FoundryCo\Cloudflare\Enums\SSLVerificationDetailsVerificationInfoRecordTarget $recordTarget = null,
	) {
	}
}
