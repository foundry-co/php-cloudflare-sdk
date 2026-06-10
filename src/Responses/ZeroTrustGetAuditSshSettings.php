<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZeroTrustGetAuditSshSettings
{
	public function __construct(
		public ?\DateTimeImmutable $createdAt = null,
		/** Provide the Base64-encoded HPKE public key that encrypts SSH session logs. See https://developers.cloudflare.com/cloudflare-one/connections/connect-networks/use-cases/ssh/ssh-infrastructure-access/#enable-ssh-command-logging. */
		public ?string $publicKey = null,
		/** Identify the seed ID. */
		public ?string $seedId = null,
		public ?\DateTimeImmutable $updatedAt = null,
	) {
	}
}
