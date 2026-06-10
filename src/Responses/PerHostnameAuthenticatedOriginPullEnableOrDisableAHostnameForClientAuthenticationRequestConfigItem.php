<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PerHostnameAuthenticatedOriginPullEnableOrDisableAHostnameForClientAuthenticationRequestConfigItem
{
	public function __construct(
		/** Certificate identifier tag. */
		public ?string $certId = null,
		/** Indicates whether hostname-level authenticated origin pulls is enabled. A null value voids the association. */
		public ?bool $enabled = null,
		/** The hostname on the origin for which the client certificate uploaded will be used. */
		public ?string $hostname = null,
	) {
	}
}
