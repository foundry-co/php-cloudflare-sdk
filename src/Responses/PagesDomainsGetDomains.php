<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PagesDomainsGetDomains
{
	public function __construct(
		public ?\FoundryCo\Cloudflare\Enums\PagesDomainsGetDomainsCertificateAuthority $certificateAuthority = null,
		public ?string $createdOn = null,
		public ?string $domainId = null,
		public ?string $id = null,
		/** The domain name. */
		public ?string $name = null,
		public ?\FoundryCo\Cloudflare\Enums\PagesDomainsGetDomainsStatus $status = null,
		public ?PagesDomainsGetDomainsValidationData $validationData = null,
		public ?PagesDomainsGetDomainsVerificationData $verificationData = null,
		public ?string $zoneTag = null,
	) {
	}
}
