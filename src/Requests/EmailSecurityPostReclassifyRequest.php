<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Change email classification
 */
readonly class EmailSecurityPostReclassifyRequest
{
	public function __construct(
		public \FoundryCo\Cloudflare\Enums\EmailSecurityPostReclassifyRequestExpectedDisposition $expectedDisposition,
		/** Base64 encoded content of the EML file. */
		public ?string $emlContent = null,
		public ?string $escalatedSubmissionId = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'expected_disposition' => $this->expectedDisposition->value,
		    'eml_content' => $this->emlContent,
		    'escalated_submission_id' => $this->escalatedSubmissionId,
		], fn ($v) => $v !== null);
	}
}
