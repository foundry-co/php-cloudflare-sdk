<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DomainIntelligenceGetDomainDetailsResolvesToRefsItem
{
	public function __construct(
		/** STIX 2.1 identifier: https://docs.oasis-open.org/cti/stix/v2.1/cs02/stix-v2.1-cs02.html#_64yvzeku5a5c. */
		public ?string $id = null,
		/** IP address or domain name. */
		public ?string $value = null,
	) {
	}
}
