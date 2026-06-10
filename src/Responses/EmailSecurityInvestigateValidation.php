<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class EmailSecurityInvestigateValidation
{
	public function __construct(
		public ?string $comment = null,
		public ?\FoundryCo\Cloudflare\Enums\EmailSecurityInvestigateValidationDkim $dkim = null,
		public ?\FoundryCo\Cloudflare\Enums\EmailSecurityInvestigateValidationDmarc $dmarc = null,
		public ?\FoundryCo\Cloudflare\Enums\EmailSecurityInvestigateValidationSpf $spf = null,
	) {
	}
}
