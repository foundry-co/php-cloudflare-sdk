<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class MTLSCertificateManagementAssociations
{
	public function __construct(
		/** The service using the certificate. */
		public ?string $service = null,
		/** Certificate deployment status for the given service. */
		public ?string $status = null,
	) {
	}
}
