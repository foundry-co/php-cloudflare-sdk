<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PagesDomainsDomains
{
	public function __construct(
		public \FoundryCo\Cloudflare\Enums\PagesDomainsDomainsCertificateAuthority $certificateAuthority,
		public string $createdOn,
		public string $domainId,
		public string $id,
		/** The domain name. */
		public string $name,
		public \FoundryCo\Cloudflare\Enums\PagesDomainsDomainsStatus $status,
		public PagesDomainsDomainsValidationData $validationData,
		public PagesDomainsDomainsVerificationData $verificationData,
		public string $zoneTag,
	) {
	}
}
