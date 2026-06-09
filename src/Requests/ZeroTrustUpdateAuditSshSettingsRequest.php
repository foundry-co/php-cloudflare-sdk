<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update Zero Trust SSH settings
 */
readonly class ZeroTrustUpdateAuditSshSettingsRequest
{
	public function __construct(
		/** Provide the Base64-encoded HPKE public key that encrypts SSH session logs. See https://developers.cloudflare.com/cloudflare-one/connections/connect-networks/use-cases/ssh/ssh-infrastructure-access/#enable-ssh-command-logging. */
		public string $publicKey,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'public_key' => $this->publicKey,
		], fn ($v) => $v !== null);
	}
}
