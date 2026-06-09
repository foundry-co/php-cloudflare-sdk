<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Specify certificate settings for Gateway TLS interception. If unset, the Cloudflare Root CA handles interception.
 */
readonly class ZeroTrustAccountsUpdateZeroTrustAccountConfigurationRequestSettingsCertificate
{
	public function __construct(
		/** Specify the UUID of the certificate used for interception. Ensure the certificate is available at the edge(previously called 'active'). A nil UUID directs Cloudflare to use the Root CA. */
		public string $id,
	) {
	}
}
