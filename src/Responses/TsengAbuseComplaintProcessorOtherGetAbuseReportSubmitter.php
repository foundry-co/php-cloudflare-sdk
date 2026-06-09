<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Information about the submitter of the report.
 */
readonly class TsengAbuseComplaintProcessorOtherGetAbuseReportSubmitter
{
	public function __construct(
		public ?string $company = null,
		public ?string $email = null,
		public ?string $name = null,
		public ?string $telephone = null,
	) {
	}
}
