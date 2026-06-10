<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PagesDomainsPatchDomainValidationData
{
	public function __construct(
		public ?\FoundryCo\Cloudflare\Enums\PagesDomainsPatchDomainValidationDataMethod $method = null,
		public ?\FoundryCo\Cloudflare\Enums\PagesDomainsPatchDomainValidationDataStatus $status = null,
		public ?string $errorMessage = null,
		public ?string $txtName = null,
		public ?string $txtValue = null,
	) {
	}
}
