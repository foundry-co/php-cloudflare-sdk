<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ImageRegistriesDeleteImageRegistry
{
	public function __construct(
		/** A string representation of a domain name. See RFC-1034 (https://www.ietf.org/rfc/rfc1034.txt). Consider that the limit of a domain name is min 3 and max 253 ASCII characters. */
		public string $domain,
		public ?string $secretStoreRef = null,
	) {
	}
}
