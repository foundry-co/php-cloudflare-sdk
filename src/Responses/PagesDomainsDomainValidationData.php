<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PagesDomainsDomainValidationData
{
	public function __construct(
		public \FoundryCo\Cloudflare\Enums\PagesDomainsDomainValidationDataMethod $method,
		public \FoundryCo\Cloudflare\Enums\PagesDomainsDomainValidationDataStatus $status,
		public ?string $errorMessage = null,
		public ?string $txtName = null,
		public ?string $txtValue = null,
	) {
	}
}
