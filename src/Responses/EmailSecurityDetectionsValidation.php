<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class EmailSecurityDetectionsValidation
{
	public function __construct(
		public ?string $comment = null,
		public ?\FoundryCo\Cloudflare\Enums\EmailSecurityDetectionsValidationDkim $dkim = null,
		public ?\FoundryCo\Cloudflare\Enums\EmailSecurityDetectionsValidationDmarc $dmarc = null,
		public ?\FoundryCo\Cloudflare\Enums\EmailSecurityDetectionsValidationSpf $spf = null,
	) {
	}
}
