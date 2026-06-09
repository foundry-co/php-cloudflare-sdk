<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class EmailSecurityMessageValidation
{
	public function __construct(
		public ?string $comment = null,
		public ?\FoundryCo\Cloudflare\Enums\EmailSecurityMessageValidationDkim $dkim = null,
		public ?\FoundryCo\Cloudflare\Enums\EmailSecurityMessageValidationDmarc $dmarc = null,
		public ?\FoundryCo\Cloudflare\Enums\EmailSecurityMessageValidationSpf $spf = null,
	) {
	}
}
